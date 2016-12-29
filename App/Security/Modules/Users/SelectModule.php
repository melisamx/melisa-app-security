<?php namespace App\Security\Modules\Users;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SelectModule extends Outbuildings
{
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'i18n'=>[
                    'title'=>'Seleccionar usuario',
                ],
                'modules'=>[
                    'list'=>$this->module('task.security.users.paging', false)
                ],
            ]
        ];
        
    }
    
}
