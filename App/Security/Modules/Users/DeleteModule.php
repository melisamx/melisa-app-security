<?php namespace App\Security\Modules\Users;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteModule extends Outbuildings
{
    
    public $event = 'event.security.users.delete.access';
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'submit'=>$this->module('task.security.users.delete'),
                    'report'=>$this->module('task.security.users.report'),
                ],
                'wrapper'=>[
                    'title'=>'Eliminar usuario'
                ],
                'i18n'=>[
                    'btnPrimary'=>[
                        'text'=>'Si, eliminar usuario'
                    ],
                ]
            ]
        ];
        
    }
    
}
