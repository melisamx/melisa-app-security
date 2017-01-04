<?php namespace App\Security\tests\Passwordless;

use App\Security\tests\TestCase;
use Melisa\Laravel\Database\InstallUser;

class CreateTest extends TestCase
{
    use InstallUser;
    
    public function testAuthentication()
    {
        
        $user = $this->findUser();
        
        $this->json('post', 'passwordless', [
            'name'=>'Test Passwordless',
            'active'=>true,
            'idUser'=>$user->id,
        ])
        ->seeJson([
            'error'=>'Unauthenticated.',
        ]);
        
    }
    
    public function testCreate()
    {
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('post', 'passwordless', [
            'name'=>'Test Passwordless',
            'active'=>true,
            'idUser'=>$user->id,
        ])
        ->dump();
        
    }
    
}
