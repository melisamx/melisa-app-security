<?php namespace App\Security\Modules\Users;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public $event = 'security.users.view.access';
    
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
