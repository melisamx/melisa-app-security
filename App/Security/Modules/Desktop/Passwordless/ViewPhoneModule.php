<?php namespace App\Security\Modules\Passwordless;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewPhoneModule extends Outbuildings
{
    
    public $event = 'security.phone.passwordless.view.access';
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'assets'=>[
                $this->asset('asset.security.phone.passwordless.view')
            ],
            'data'=>[
                'wrapper'=>[
                    'title'=>'Passwordless',
                ],
                'modules'=>[
                    'add'=>$this->module('task.security.phone.passwordless.add.access', false)
                ],
                'i18n'=>[
                    'lisEmails'=>[
                        'title'=>'Emails permitidos'
                    ]
                ],
                'urls'=>[
                    'passwordless'=>'/security.php/passwordless/paging/',
                    'emails'=>'/security.php/passwordlessEmails/paging/',
                ],
                'faker'=>[
                    'passwordless'=>$this->fakerPasswordless(),
                    'emails'=>$this->fakerEmails(),
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