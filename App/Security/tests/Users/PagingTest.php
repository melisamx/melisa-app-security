<?php namespace App\Security\tests\Users;

use App\Security\tests\TestCase;

class PagingTest extends TestCase
{
    
    public function testSimple()
    {
        
        $this->json('get', 'users/', [
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
