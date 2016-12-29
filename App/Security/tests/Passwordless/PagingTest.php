<?php namespace App\Security\tests\Passwordless;

use App\Security\tests\TestCase;

class PagingTest extends TestCase
{
    
    public function testSimple()
    {
        
        $this->json('get', 'passwordless/paging/', [
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
                    'id', 'userEmail'
                ]
            ],
            'total'
        ]);
        
    }
    
}
