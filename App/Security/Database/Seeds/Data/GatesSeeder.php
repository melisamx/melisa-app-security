<?php

namespace App\Security\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\Gates;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class GatesSeeder extends InstallSeeder
{
    
    public function run()
    {        
        Gates::updateOrCreate([
            'key'=>'*',
            'description'=>'All actions'
        ]);        
        Gates::updateOrCreate([
            'key'=>'app.security.users.show.system',
            'description'=>'Mostrar usuarios de sistema'
        ]);        
        Gates::updateOrCreate([
            'key'=>'app.security.profiles.show.system',
            'description'=>'Mostrar perfiles de sistema'
        ]);        
        Gates::updateOrCreate([
            'key'=>'app.security.rbacRoles.show.system',
            'description'=>'Mostrar roles privilegiados de sistema'
        ]);        
        Gates::updateOrCreate([
            'key'=>'app.security.rbacTasks.show.system',
            'description'=>'Mostrar tareas privilegiadas de sistema'
        ]);        
        Gates::updateOrCreate([
            'key'=>'app.security.rbacIdentities.show.system',
            'description'=>'Mostrar perfiles privilegiados de sistema'
        ]);        
    }
    
}
