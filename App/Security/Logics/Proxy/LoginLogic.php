<?php

namespace App\Security\Logics\Proxy;

use GuzzleHttp\Client;
use Melisa\core\LogicBusiness;
use App\Core\Repositories\UsersRepository;
use App\Security\Models\OAuthClients;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LoginLogic
{
    use LogicBusiness;
    
    protected $repoUsers;
    protected $apiConsumer;
    protected $repoOauthClients;
    
    const REFRESH_TOKEN = 'refreshToken';

    public function __construct(
        UsersRepository $repoUsers,
        OAuthClients $repoOauthClients
    )
    {
        $this->repoUsers = $repoUsers;
        $this->repoOauthClients = $repoOauthClients;
    }
    
    public function run(array $input)
    {
        $user = $this->getUser($input['email']);
        
        if( !$user) {
            return false;
        }
        
        $client = $this->getClient($input['clientId']);
        
        if( !$client) {
            return false;
        }
        
        return $this->proxyLogin('password', $user, $client, $input['password']);
    }
    
    public function getClient($id)
    {
        $result = $this->repoOauthClients->getById($id);
        
        if( $result) {
            return $result;
        }
        
        return $this->errorCode('sec.login.3');
    }
    
    public function proxyLogin($grantType, $user, $client, $password)
    {
        $params = array_merge([
            'username'=>$user->email,
            'password'=>$password,
        ], [
            'client_id'=>$client->id,
            'client_secret'=>$client->secret,
            'grant_type'=>$grantType
        ]);
        
        $client = new Client([
            'base_uri'=>env('APP_URL') . 'security.php'
        ]);
        
        $response = $client->post('/oauth/token', [
            'form_params'=>$params
        ]);
        
        if ( $response->getStatusCode() !== 200) {
            return $this->errorCode('sec.login.2');
        }
        
        $result = json_decode($response->getBody()->getContents());
        if ( is_null($result) || !isset($result->access_token)) {
            return $this->errorCode('sec.login.2');
        }
        
        return [
            'access_token'=>$result->access_token,
            'expires_in'=>$result->expires_in,
            'refresh_token'=>$result->refresh_token
        ];
    }
    
    public function getUser($email)
    {
        $user = $this->repoUsers
            ->getModel()
            ->where('email', $email)
            ->first();
        
        if ( is_null($user)) {
            return $this->errorCode('sec.login.1');
        }
        
        return $user;
    }
    
    /**
     * Logs out the user. We revoke access token and refresh token. 
     * Also instruct the client to forget the refresh cookie.
     */
    public function logout()
    {
        $user = app('auth')->user();
        
        if (!$user) {
            return false;
        }
        
        $accessToken = $user->token();
        
        if (!$accessToken) {
            return false;
        }
        
        $refreshToken = \DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update([
                'revoked'=>true
            ]);
        
        $accessToken->revoke();
    }
    
}
