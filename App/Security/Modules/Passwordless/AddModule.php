<?php namespace App\Security\Modules\Passwordless;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddModule extends Outbuildings
{
    
    public $event = 'security.passwordless.add.access';
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'wrapper'=>[
                    'title'=>'Agregar Passwordless',
                ],
                'modules'=>[
                    'create'=>$this->module('task.security.passwordless.create'),
                    'selectUser'=>$this->module('task.security.phone.users.select.access', false),
                ],
                'i18n'=>[
                    'saving'=>'Guardando passworless'
                ]
            ]
        ];
        
    }
    
    public function fakerPasswordless() {
        
        return [
            'type'=>'array',
            'minItems'=>30,
            'items'=>[
                'type'=>'object',
                'properties'=>[
                    'id'=>[
                        'type'=>'string',
                        'faker'=>'random.uuid',
                    ],
                    'name'=>[
                        'type'=>'string',
                        'faker'=>'lorem.word',
                    ],
                    'userName'=>[
                        'type'=>'string',
                        'faker'=>'name.firstName',
                    ],
                    'active'=>[
                        'type'=>'boolean',
                        'faker'=>'random.boolean',
                    ],
                    'createdAt'=>[
                        'type'=>'string',
                        'faker'=>'date.recent'
                    ],
                ],
                'required'=>[
                    'id',
                    'name',
                    'userName',
                    'active',
                    'createdAt',
                ]
            ]
        ];
        
    }
    
    public function fakerEmails() {
        
        return [
            'type'=>'array',
            'minItems'=>5,
            'items'=>[
                'type'=>'object',
                'properties'=>[
                    'email'=>[
                        'type'=>'string',
                        'faker'=>'internet.email',
                    ],
                    'active'=>[
                        'type'=>'boolean',
                        'faker'=>'random.boolean',
                    ],
                    'dateExpiry'=>[
                        'type'=>'string',
                        'faker'=>'date.recent'
                    ],
                ],
                'required'=>[
                    'email',
                    'active',
                    'dateExpiry',
                ]
            ]
        ];
        
    }
    
}
