<?php namespace App\Security\tests\Passwordless\Emails;

use App\Security\tests\TestCase;
use App\Security\Models\PasswordlessEmails;

class PagingTest extends TestCase
{
    
    public function getPasswordless()
    {
        
        return PasswordlessEmails::first();
        
    }
    
    /**
     * Simple paging
     *
     * @return void
     */
    public function testSimple()
    {
        
        $passwordless = $this->getPasswordless();
        
        $this->json('get', 'passwordlessEmails/paging/', [
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
    
    public function testNoExistPasswordless()
    {
        
        $passwordless = $this->getPasswordless();
        $idNoExist = str_replace('-', 'c', $passwordless->idPasswordless);
        
        $this->json('get', 'passwordlessEmails/paging/', [
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
    
    public function testNoFilter()
    {
        
        $this->json('get', 'passwordlessEmails/paging/', [
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
    
    public function testNoPaging()
    {
        
        $this->json('get', 'passwordlessEmails/paging/')
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
