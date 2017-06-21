<?php

namespace App\Security\Modules\Desktop\RbacRoles;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public $event = 'security.rabcRoles.view.access';
    
    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'roles'=>$this->module('task.security.rbacRoles.paging'),
                    'delete'=>$this->module('task.security.rbacRoles.delete', false),
                    'deactivate'=>$this->module('task.security.rbacRoles.deactivate', false),
                    'activate'=>$this->module('task.security.rbacRoles.activate', false),
                    'add'=>$this->module('task.security.rbacRoles.add.access', false),
                    'identities'=>$this->module('task.security.rbacIdentities.paging'),
                    'identitiesAdd'=>$this->module('task.security.rbacIdentities.add.access', false),
                    'identitiesDeactive'=>$this->module('task.security.rbacIdentities.deactivate', false),
                    'identitiesActive'=>$this->module('task.security.rbacIdentities.activate', false),
                    'identitiesDelete'=>$this->module('task.security.rbacIdentities.delete', false),
                    'tasks'=>$this->module('task.security.rbacTasks.paging'),
                    'tasksAdd'=>$this->module('task.security.rbacTasks.add.access', false),
                    'tasksDeactive'=>$this->module('task.security.rbacTasks.deactivate', false),
                    'tasksActive'=>$this->module('task.security.rbacTasks.activate', false),
                    'tasksDelete'=>$this->module('task.security.rbacTasks.delete', false),
                ],
                'wrapper'=>[
                    'title'=>'Roles',
                ],
            ]
        ];        
    }
    
}
