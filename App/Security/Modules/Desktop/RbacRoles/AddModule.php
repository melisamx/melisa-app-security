<?php

namespace App\Security\Modules\Desktop\RbacRoles;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddModule extends Outbuildings
{
    
    public $event = 'security.rbacRoles.add.access';
    
    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'submit'=>$this->module('task.security.rbacRoles.create'),
                ],
                'wrapper'=>[
                    'title'=>'Agregar rol'
                ],
                'i18n'=>[
                    'success'=>'Rol agregado',
                    'btnSave'=>'Agregar rol',
                    'saving'=>'Agregando rol'
                ],
            ]
        ];        
    }
    
}
