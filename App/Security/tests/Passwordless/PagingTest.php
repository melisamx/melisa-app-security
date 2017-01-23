<?php namespace App\Security\tests\Passwordless;

use App\Security\tests\TestCase;
use Melisa\Laravel\Database\InstallUser;

class PagingTest extends TestCase
{
    use InstallUser;
    
    /**
     * @group completed
     */
    public function testSimple()
    {
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('get', 'passwordless/paging/', [
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
