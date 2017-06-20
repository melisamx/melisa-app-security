<?php

namespace App\Security\Modules\Desktop\Identities;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddModule extends Outbuildings
{
    
    public $event = 'security.identities.add.access';
    
    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'submit'=>$this->module('task.security.identities.create'),
                    'profiles'=>$this->module('task.security.profiles.paging'),
                ],
                'wrapper'=>[
                    'title'=>'Agregar perfil'
                ],
                'i18n'=>[
                    'success'=>'Perfil agregado',
                    'txtName'=>'Nombre',
                    'btnSave'=>'Guardar',
                    'frmMessageLoading'=>'Guardando identidad'
                ],
            ]
        ];        
    }
    
}
