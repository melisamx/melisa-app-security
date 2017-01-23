<?php namespace App\Security\Database\Seeds\Faker;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\Applications;
use App\Security\Models\ApplicationsRoles;
use App\Security\Models\ApplicationsRT;
use App\Security\Models\Tasks;
use App\Security\Models\RolesIdentities;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ApplicationsRolesSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $identity = $this->findIdentity();
        $application = Applications::where('key', 'lamina')->first();
        $task = Tasks::where('key', 'task.lamina.programaciones.view.access')->first();
        
        $applicationRol = ApplicationsRoles::updateOrCreate([
            'idApplication'=>$application->id,
            'rol'=>'Administrators',
        ], [
            'idIdentityCreated'=>$identity->id,
            'description'=>'Administrators application lamina'
        ]);
        
        ApplicationsRT::updateOrCreate([
            'idApplicationRol'=>$applicationRol->id,
            'idTask'=>$task->id,
        ], [
            'idIdentityCreated'=>$identity->id,
        ]);
        
        RolesIdentities::updateOrCreate([
            'idApplicationRol'=>$applicationRol->id,
            'idIdentity'=>$identity->id,
        ], [
            'idIdentityCreated'=>$identity->id,
        ]);
        
    }
    
}
