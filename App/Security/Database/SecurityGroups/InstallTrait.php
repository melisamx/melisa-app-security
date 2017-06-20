<?php

namespace App\Security\Database\SecurityGroups;

use App\Security\Models\SecurityGroups;
use App\Security\Models\SecurityGroupsGates;
use App\Security\Models\SecurityGroupsSystems;
use App\Security\Models\SystemsSecurity;
use App\Security\Models\Gates;

/**
 * Install security group
 *
 * @author Luis Josafat Heredia Contreras
 */
trait InstallTrait
{
    public function installSecurityGroup($name, $keySystemSecurity, array $tasks = [])
    {
        $idIdentity = $this->findIdentity()->id;
        $systemSecurity = $this->findSystemSecurity($keySystemSecurity);        
        $securityGroup = SecurityGroups::updateOrCreate([
            'name'=>$name,
        ], [
            'idIdentityCreated'=>$idIdentity,
        ]);
        
        foreach($tasks as $task) {
            $gate = $this->findGate($task);
            
            SecurityGroupsGates::updateOrCreate([
                'idSecurityGroup'=>$securityGroup->id,
                'idGate'=>$gate->id,
            ], [
                'idIdentityCreated'=>$idIdentity,
            ]);

            SecurityGroupsSystems::updateOrCreate([
                'idSecurityGroup'=>$securityGroup->id,
                'idSystemSecurity'=>$systemSecurity->id
            ], [
                'idIdentityCreated'=>$idIdentity,
            ]);
        }
    }
    
    public function findSystemSecurity($key)
    {
        return SystemsSecurity::where('key', $key)->first();
    }
    
    public function findGate($key)
    {
        return Gates::where('key', $key)->first();
    }
    
}
