<?php

namespace App\Security\Logics\Proxy;

use App\Core\Repositories\UsersRepository;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LoginLogic
{
    
    protected $repoUsers;
    protected $apiConsumer;
    
    const REFRESH_TOKEN = 'refreshToken';

    public function __construct(
        UsersRepository $repoUsers
    )
    {
        $this->repoUsers = $repoUsers;
        $app = app();
        $this->cookie = $app->make('cookie');
        $this->apiConsumer = $app->make('apiconsumer');
    }
    
    public function run(array $input)
    {
        $user = $this->getUser($input['email']);
        
        if( !$user) {
            return false;
        }
        
        return $this->proxyLogin('password', $user, $input['clientId'], $input['password']);
    }
    
    public function proxyLogin($grantType, $user, $clientId, $password)
    {
        $params = array_merge([
            'username'=>$user->email,
            'password'=>$password,
        ], [
            'client_id'=>$clientId,
            'client_secret'=>env('PASSWORD_CLIENT_SECRET'),
            'grant_type'=>$grantType
        ]);
        
        $response = $this->apiConsumer->post('/oauth/token', $params);
        
        if ( !$response->isSuccessful()) {
            return $this->error('-A3.4');
        }
        
        $result = json_decode($response->getContent());
        
        // Create a refresh token cookie
        $this->cookie->queue(
            self::REFRESH_TOKEN,
            $result->refresh_token,
            864000,// 10 days
            null,
            null,
            false,
            true// HttpOnly
        );
        
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
            return $this->error('Not found user');
        }
        
        return $user;
    }
    
    /**
     * Logs out the user. We revoke access token and refresh token. 
     * Also instruct the client to forget the refresh cookie.
     */
    public function logout()
    {
        $accessToken = app('auth')->user()->token();
        
        $refreshToken = DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update([
                'revoked'=>true
            ]);
        
        $accessToken->revoke();
        $this->cookie->queue($this->cookie->forget(self::REFRESH_TOKEN));
    }
    
}
