<?php namespace App\Security\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class FakerSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->call(Faker\SecurityGroupsSeeder::class);
        $this->call(Faker\SecurityGroupsSystemsSeeder::class);
        $this->call(Faker\SecurityGroupsGatesSeeder::class);
        $this->call(Faker\ApplicationsRolesSeeder::class);
        
    }
    
}
