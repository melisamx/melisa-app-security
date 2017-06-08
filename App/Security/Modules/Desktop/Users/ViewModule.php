<?php

namespace App\Security\Modules\Desktop\Users;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public $event = 'security.users.view.access';
    
    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'wrapper'=>[
                    'title'=>'Usuarios',
                ],
                'modules'=>[
                    'users'=>$this->module('task.security.users.paging'),
                    'delete'=>$this->module('task.security.users.delete', false),
                    'deactivate'=>$this->module('task.security.users.deactivate', false),
                    'activate'=>$this->module('task.security.users.activate', false),
                    'add'=>$this->module('task.security.users.add.access', false),
                ],
            ]
        ];        
    }
    
}
