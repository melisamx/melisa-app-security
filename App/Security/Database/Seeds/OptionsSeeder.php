<?php namespace App\Security\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class OptionsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installOption('option.security.access', [
            'name'=>'Option main de aplicación security',
            'text'=>'Security',
            'isSubMenu'=>true
        ]);
        
    }
    
}
