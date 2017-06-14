<?php

namespace App\Security\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\SecurityGroups;
use App\Security\Models\SecurityGroupsGates;
use App\Security\Models\SecurityGroupsSystems;
use App\Security\Models\SystemsSecurity;
use App\Security\Models\Gates;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $this->onlyGoods();    
    }
    
    public function onlyGoods()
    {
        $idIdentity = $this->findIdentity()->id;
        $gate = $this->findGate('app.security.users.show.system');
        $systemSecurity = $this->findSystemSecurity('usergod');
        
        $securityGroup = SecurityGroups::updateOrCreate([
            'name'=>'Goods',
        ], [
            'idIdentityCreated'=>$idIdentity,
        ]);
        
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
    
    public function findSystemSecurity($key)
    {
        return SystemsSecurity::where('key', $key)->first();
    }
    
    public function findGate($key)
    {
        return Gates::where('key', $key)->first();
    }
    
}
