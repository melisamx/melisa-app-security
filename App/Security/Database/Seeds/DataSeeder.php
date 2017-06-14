<?php

namespace App\Security\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DataSeeder extends InstallSeeder
{
    
    public function run()
    {        
//        $this->call(Data\GatesSeeder::class);
//        $this->call(Data\SystemsSecuritySeeder::class);
//        $this->call(Data\GatesSystemsSeeder::class);        
        $this->call(Data\SecurityGroupsSeeder::class);        
    }
    
}
