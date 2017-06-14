<?php

namespace App\Security\Database\Seeds\Faker;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\SecurityGroups;
use App\Security\Models\SecurityGroupsGates;
use App\Security\Models\Gates;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsGatesSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $identity = $this->findIdentity();
        $gate = Gates::where('key', 'task.lamina.programaciones.view.access')->first();
        $securityGroup = SecurityGroups::where('name', 'gods')->first();
        
        SecurityGroupsGates::updateOrCreate([
            'idSecurityGroup'=>$securityGroup->id,
            'idGate'=>$gate->id,
        ], [
            'idIdentityCreated'=>$identity->id,
        ]);
        
        $securityGroup = SecurityGroups::where('name', 'default')->first();
        
        SecurityGroupsGates::updateOrCreate([
            'idSecurityGroup'=>$securityGroup->id,
            'idGate'=>$gate->id,
        ], [
            'idIdentityCreated'=>$identity->id,
        ]);                
    }
    
}
