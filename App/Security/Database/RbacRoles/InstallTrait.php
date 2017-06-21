<?php

namespace App\Security\Database\RbacRoles;

use App\Core\Models\RbacRoles;
use App\Core\Models\RbacTasks;

/**
 * Install application roles
 *
 * @author Luis Josafat Heredia Contreras
 */
trait InstallTrait
{
    public function installRbacRoles($role, array $roleConfig, array $tasks = [])
    {
        $idIdentity = $this->findIdentity()->id;
        $roleConfig ['idIdentityCreated']= $idIdentity;
        $rbacRol = $this->findRbacRol($role, $roleConfig);
        
        foreach($tasks as $taskKey) {
            
            $task = $this->findTask($taskKey);
            
            RbacTasks::updateOrCreate([
                'idRbacRol'=>$rbacRol->id,
                'idTask'=>$task->id,
            ], [
                'idIdentityCreated'=>$idIdentity,
                'isSystem'=>true,
            ]);
            
        }
    }
    
    public function findRbacRol($rol, $rolConfig)
    {
        return RbacRoles::updateOrCreate([
            'role'=>$rol,
        ], $rolConfig);
    }
    
}
