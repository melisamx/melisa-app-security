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
        $this->users();
        $this->scopes();
        $this->passwordless();
    }
    
    public function passwordless()
    {
        $this->call(Desktop\Passwordless\ViewSeeder::class);
    }
    
    public function users()
    {
        $this->call(Desktop\Users\ViewSeeder::class);
        $this->call(Desktop\Users\AddSeeder::class);
    }
    
    public function scopes()
    {
        $this->call(Desktop\Scopes\AddSeeder::class);
        $this->call(Desktop\Scopes\ViewSeeder::class);
    }
    
}
