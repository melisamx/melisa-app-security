<?php namespace App\Security\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

class ModulesPhoneSeeder extends Seeder
{
    
    public function run()
    {
        $this->users();
        $this->passwordless();
    }
    
    public function passwordless()
    {
        $this->call(Phone\Passwordless\ViewSeeder::class);
        $this->call(Phone\Passwordless\AddSeeder::class);
    }
    
    public function users()
    {
        $this->call(Phone\Users\SelectSeeder::class);
    }
    
}
