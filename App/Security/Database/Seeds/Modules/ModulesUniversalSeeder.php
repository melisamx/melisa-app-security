<?php

namespace App\Security\Database\Seeds\Modules;

use Melisa\Laravel\Database\InstallSeeder;

class ModulesUniversalSeeder extends InstallSeeder
{
    
    public function run()
    {
        $this->users();
        $this->scopes();
        $this->passwordless();
        $this->identities();
        $this->profiles();
    }
    
    public function profiles()
    {
        $this->installModuleJson('Universal/Profiles', [
            'paging',
        ]);
    }
    
    public function identities()
    {
        $this->installModuleJson('Universal/Identities', [
            'create',
            'delete',
            'deactivate',
            'activate',
            'paging',
        ]);
    }
    
    public function users()
    {
        $this->installModuleJson('Universal/Users', [
            'create',
            'delete',
            'deactivate',
            'activate',
            'paging',
        ]);
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
