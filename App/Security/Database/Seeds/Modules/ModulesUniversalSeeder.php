<?php namespace App\Security\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

class ModulesUniversalSeeder extends Seeder
{
    
    public function run()
    {
        $this->users();
        $this->scopes();
        $this->passwordless();
    }
    
    public function users()
    {
        $this->call(Universal\Users\PagingSeeder::class);
    }
    
    public function scopes()
    {
        $this->call(Universal\Scopes\PagingSeeder::class);
        $this->call(Universal\Scopes\CreateSeeder::class);
        $this->call(Universal\Scopes\DeleteSeeder::class);
    }
    
    public function passwordless()       
    {
        $this->call(Universal\Passwordless\CreateSeeder::class);
        $this->call(Universal\Passwordless\PagingSeeder::class);
    }
    
}
