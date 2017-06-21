<?php

namespace App\Security\Modules\Desktop\RbacIdentities;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddModule extends Outbuildings
{
    
    public $event = 'security.rbacIdentities.add.access';
    
    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'submit'=>$this->module('task.security.rbacIdentities.create'),
                    'identities'=>$this->module('task.security.identities.paging'),
                ],
                'wrapper'=>[
                    'title'=>'Agregar perfil privilegiado'
                ],
                'i18n'=>[
                    'success'=>'Perfil privilegiado agregado',
                    'btnSave'=>'Agregar perfil privilegiado',
                    'saving'=>'Agregando perfil privilegiado'
                ],
            ]
        ];        
    }
    
}
