<?php

namespace App\Security\Database\Seeds\Faker;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\SecurityGroups;
use App\Security\Models\SecurityGroupsTypes;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $identity = $this->findIdentity();
        
//        SecurityGroups::updateOrCreate([
//            'name'=>'gods',
//        ], [
//            'idIdentityCreated'=>$identity->id,
//        ]);
        
        SecurityGroups::updateOrCreate([
            'name'=>'default',
        ], [
            'idIdentityCreated'=>$identity->id,
            'order'=>0,
        ]);        
    }
    
}
