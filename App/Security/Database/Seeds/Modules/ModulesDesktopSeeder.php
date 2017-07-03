<?php

namespace App\Security\Database\Seeds\Modules;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesDesktopSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $this->users();
        $this->scopes();
        $this->passwordless();
        $this->identities();
        $this->rbacRoles();
        $this->rbacIdentities();
        $this->myProfileSettings();
        $this->myUser();
    }
    
    public function myUser()
    {
        $this->installModuleJson('Desktop/My/User', [
            'changePass',
        ]);
    }
    
    public function myProfileSettings()
    {
        $this->installModuleJson('Desktop/My/ProfileSettings', [
            'view',
        ]);
    }
    
    public function rbacIdentities()
    {
        $this->installModuleJson('Desktop/RbacIdentities', [
            'add',
        ]);
    }
    
    public function rbacRoles()
    {
        $this->installModuleJson('Desktop/RbacRoles', [
            'add',
            'view',
        ]);
    }
    
    public function passwordless()
    {
        $this->call(Desktop\Passwordless\ViewSeeder::class);
    }
    
    public function identities()
    {
        $this->installModuleJson('Desktop/Identities', [
            'add',
        ]);
    }
    
    public function users()
    {
        $this->installModuleJson('Desktop/Users', [
            'add',
            'view',
        ]);
    }
    
    public function scopes()
    {
        $this->call(Desktop\Scopes\AddSeeder::class);
        $this->call(Desktop\Scopes\ViewSeeder::class);
    }
    
}
