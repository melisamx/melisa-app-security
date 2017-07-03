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
        $this->rbacRoles();
        $this->rbacTasks();
        $this->rbacIdentities();
        $this->myUser();
    }
    
    public function myUser()
    {
        $this->installModuleJson('Universal/My/User', [
            'changePass',
        ]);
    }
    
    public function rbacIdentities()
    {
        $this->installModuleJson('Universal/RabacIdentities', [
            'create',
            'delete',
            'deactivate',
            'activate',
            'paging',
        ]);
    }
    
    public function rbacTasks()
    {
        $this->installModuleJson('Universal/RabacTasks', [
            'create',
            'delete',
            'deactivate',
            'activate',
            'paging',
        ]);
    }
    
    public function rbacRoles()
    {
        $this->installModuleJson('Universal/RabacRoles', [
            'create',
            'delete',
            'deactivate',
            'activate',
            'paging',
        ]);
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
