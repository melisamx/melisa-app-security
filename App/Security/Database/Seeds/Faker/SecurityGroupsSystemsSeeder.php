<?php namespace App\Security\Database\Seeds\Faker;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\SecurityGroups;
use App\Security\Models\SecurityGroupsSystems;
use App\Security\Models\SystemsSecurity;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsSystemsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $identity = $this->findIdentity();
        $securityGroup = SecurityGroups::where('name', 'gods')->first();
        $systemSecurity = SystemsSecurity::where('key', 'usergod')->first();
        
        SecurityGroupsSystems::updateOrCreate([
            'idSecurityGroup'=>$securityGroup->id,
            'idSystemSecurity'=>$systemSecurity->id,
        ], [
            'idIdentityCreated'=>$identity->id,
        ]);        
        
        $securityGroup = SecurityGroups::where('name', 'default')->first();        
        $systemSecurity = SystemsSecurity::where('key', 'art')->first();
        
        SecurityGroupsSystems::updateOrCreate([
            'idSecurityGroup'=>$securityGroup->id,
            'idSystemSecurity'=>$systemSecurity->id,
        ], [
            'idIdentityCreated'=>$identity->id,
            'order'=>1
        ]);
                
    }
    
}
