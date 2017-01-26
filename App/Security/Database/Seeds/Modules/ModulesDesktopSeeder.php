<?php namespace App\Security\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesDesktopSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Desktop\ScopesAddSeeder::class);
        $this->call(Desktop\ScopesViewSeeder::class);
        $this->call(Desktop\UsersViewSeeder::class);
        $this->call(Desktop\PasswordlessViewSeeder::class);
        $this->call(Desktop\UsersAddSeeder::class);
        
        
    }
    
}
