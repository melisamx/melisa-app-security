<?php namespace App\Security\Modules\Users;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public function dataDictionary() {
        
        return [
            'success'=>true,
            'data'=>[
                'wrapper'=>[
                    'title'=>'Usuarios',
                ],
                'modules'=>[
                    'users'=>$this->module('task.security.users.paging')
                ],
            ]
        ];
        
    }
    
}
