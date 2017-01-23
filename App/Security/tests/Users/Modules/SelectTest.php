<?php namespace App\Security\tests\Users\Modules;

use App\Security\tests\TestCase;
use Melisa\Laravel\Database\InstallUser;

class SelectTest extends TestCase
{
    use InstallUser;
    
    /**
     * @group completed
     */
    public function testSelectPhone()
    {
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('get', 'modules/users/selectPhone')
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
