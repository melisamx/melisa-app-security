<?php namespace App\Security\tests\Users\Modules;

use App\Security\tests\TestCase;

class SelectTest extends TestCase
{
    
    public function testSelectPhone()
    {
        
        $this->json('get', 'modules/users/selectPhone')
        ->seeJson([
            'success'=>true,
        ])
        ->seeJsonStructure([
            'data'=>[
                'i18n'=>[
                    'title'
                ],
                'modules'=>[
                    'list'=>[
                        'url'
                    ]
                ]
            ],
        ]);
        
    }
    
}
