<?php

namespace App\Security\Database\ApplicationsRoles;

use App\Security\Models\ApplicationsRoles;
use App\Security\Models\ApplicationsRT;

/**
 * Install application roles
 *
 * @author Luis Josafat Heredia Contreras
 */
trait InstallTrait
{
    public function installApplicationRol($keyApplication, $rolName, $rolDescription = '', array $tasksKeys = [])
    {
        $idIdentity = $this->findIdentity()->id;
        $application = $this->findApplication($keyApplication);        
        $applicationsRoles = ApplicationsRoles::updateOrCreate([
            'idApplication'=>$application->id,
            'role'=>$rolName,
        ], [
            'idIdentityCreated'=>$idIdentity,
            'description'=>$rolDescription
        ]);
        
        foreach($tasksKeys as $taskKey) {
            $task = $this->findTask($taskKey);
            
            ApplicationsRT::updateOrCreate([
                'idApplicationRol'=>$applicationsRoles->id,
                'idTask'=>$task->id,
            ], [
                'idIdentityCreated'=>$idIdentity,
            ]);
            
        }
    }
    
}
