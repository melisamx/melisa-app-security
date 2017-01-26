<?php namespace App\Security\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

class ModulesUniversalSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Universal\PasswordlessCreateSeeder::class);
        $this->call(Universal\UsersPagingSeeder::class);
        $this->call(Universal\ScopesPagingSeeder::class);
        $this->call(Universal\PasswordlessPagingSeeder::class);
        $this->call(Universal\ScopesCreateSeeder::class);
        $this->call(Universal\ScopesDeleteSeeder::class);
        
    }
    
}
