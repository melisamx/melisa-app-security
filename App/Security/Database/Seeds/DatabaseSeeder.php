<?php

namespace App\Security\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class DatabaseSeeder extends InstallSeeder
{
    
    public function run()
    {                
//        $this->call(ApplicationSeeder::class);
//        $this->call(OptionsSeeder::class);
//        $this->call(ModulesSeeder::class);
        $this->call(DataSeeder::class);
        
        $this->cleanLogs();        
    }
    
}
