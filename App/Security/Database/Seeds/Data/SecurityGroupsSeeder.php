<?php

namespace App\Security\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Database\SecurityGroups\InstallTrait;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsSeeder extends InstallSeeder
{
    use InstallTrait;
    
    public function run()
    {        
        $this->installSecurityGroup('Goods', 'usergod', [
            '*',
            'app.security.users.show.system',
            'app.security.profiles.show.system',
        ]);
    }
       
}
