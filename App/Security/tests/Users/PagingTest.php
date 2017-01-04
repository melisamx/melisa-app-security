<?php namespace App\Security\tests\Users;

use App\Security\tests\TestCase;
use Melisa\Laravel\Database\InstallUser;

class PagingTest extends TestCase
{
    use InstallUser;
    
    public function testSimple()
    {
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('get', 'users/', [
            'page'=>1,
            'start'=>0,
            'limit'=>25,
        ])
        ->seeJson([
            'success'=>true,
        ])
        ->seeJsonStructure([
            'data'=>[
                '*'=>[
                    'id', 'name', 'email', 'active', 'createdAt', 'isSystem', 'isGod', 'firstLogin'
                ]
            ],
            'total'
        ]);
        
    }
    
}
