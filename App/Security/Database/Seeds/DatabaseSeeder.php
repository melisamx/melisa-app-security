<?php namespace App\Security\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
                
        $this->call(ApplicationSeeder::class);
        $this->call(OptionsSeeder::class);
        $this->call(ModulesSeeder::class);
        $this->call(DataSeeder::class);
        
    }
    
}
