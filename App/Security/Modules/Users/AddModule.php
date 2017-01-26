<?php namespace App\Security\Modules\Users;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddModule extends Outbuildings
{
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'create'=>$this->module('task.security.users.create'),
                ],
                'wrapper'=>[
                    'title'=>'Agregar usuario'
                ],
                'i18n'=>[
                    'txtName'=>'Nombre',
                    'btnSave'=>'Guardar',
                    'frmMessageLoading'=>'Guardando cambios'
                ],
            ]
        ];
        
    }
    
}
