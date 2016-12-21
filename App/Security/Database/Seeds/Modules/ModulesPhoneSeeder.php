<?php namespace App\Security\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

class ModulesPhoneSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Phone\PasswordlessViewSeeder::class);
        
    }
    
}
