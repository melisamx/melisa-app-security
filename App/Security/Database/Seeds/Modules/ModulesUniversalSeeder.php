<?php namespace App\Security\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

class ModulesUniversalSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Universal\PasswordlessCreateSeeder::class);
        $this->call(Universal\UsersPagingSeeder::class);
        
    }
    
}
