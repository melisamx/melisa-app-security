<?php namespace App\Security\tests\Passwordless\Emails;

use App\Security\tests\TestCase;
use App\Security\Models\PasswordlessEmails;
use Melisa\Laravel\Database\InstallUser;

class PagingTest extends TestCase
{
    use InstallUser;
    
    public function getPasswordless()
    {
        
        return PasswordlessEmails::first();
        
    }
    
    /**
     * Simple paging
     * @group completed
     */
    public function testSimple()
    {
        
        $passwordless = $this->getPasswordless();
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('get', 'passwordlessEmails/paging/', [
            'page'=>1,
            'start'=>0,
            'limit'=>25,
            'filter'=>json_encode([
                [
                    'property'=>'idPasswordless',
                    'value'=>$passwordless->idPasswordless
                ]
            ])
        ])
        ->seeJson([
            'success'=>true
        ])
        ->seeJsonEquals([
            'success'=>true,
            'total'=>1,
            'data'=>[
                $passwordless->getAttributes()
            ],
        ])
        ->seeJsonStructure([
            'data'=>[
                '*'=>[
                    'id', 'idPasswordless'
                ]
            ],
            'total'
        ]);
        
    }
    
    /**
     * @group completed
     */
    public function testNoExistPasswordless()
    {
        
        $passwordless = $this->getPasswordless();
        $idNoExist = str_replace('-', 'c', $passwordless->idPasswordless);
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('get', 'passwordlessEmails/paging/', [
            'page'=>1,
            'start'=>0,
            'limit'=>25,
            'filter'=>json_encode([
                [
                    'property'=>'idPasswordless',
                    'value'=>$idNoExist
                ]
            ])
        ])
        ->seeJson([
            'success'=>false,
        ])
        ->seeJsonStructure([
            'errors'=>[
                '*'=>[
                    'filter'
                ]
            ],
        ]);
        
    }
    
    /**
     * @group completed
     */
    public function testNoFilter()
    {
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('get', 'passwordlessEmails/paging/', [
            'page'=>1,
            'start'=>0,
            'limit'=>25,
        ])
        ->seeJson([
            'success'=>false,
        ])
        ->seeJsonStructure([
            'errors'=>[
                '*'=>[
                    'filter'
                ]
            ],
        ]);
        
    }
    
    /**
     * @group completed
     */
    public function testNoPaging()
    {
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('get', 'passwordlessEmails/paging/')
        ->seeJson([
            'success'=>false,
        ])
        ->seeJsonStructure([
            'errors'=>[
                '*'=>[
                    'filter'
                ]
            ],
        ]);
        
    }
    
}
