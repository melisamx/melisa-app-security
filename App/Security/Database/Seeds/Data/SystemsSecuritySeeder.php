<?php

namespace App\Security\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\SystemsSecurity;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class SystemsSecuritySeeder extends InstallSeeder
{
    
    public function run()
    {        
        SystemsSecurity::updateOrCreate([
            'key'=>'usergod',
        ], [
            'description'=>'Simple security system based on the users god property'
        ]);
        
        SystemsSecurity::updateOrCreate([
            'key'=>'art',
        ], [
            'description'=>'Security Application Roles Task'
        ]);
        
        SystemsSecurity::updateOrCreate([
            'key'=>'arst',
        ], [
            'description'=>'Security Application Roles Scope Task'
        ]);        
    }
    
}
