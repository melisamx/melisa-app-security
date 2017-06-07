<?php

namespace App\Security\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class OptionsSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $this->installOption('option.security.access', [
            'name'=>'Option main de aplicación security',
            'text'=>'Seguridad',
            'isSubMenu'=>true,
            'iconClassSmall'=>'x-fa fa fa-shield',
            'iconClassMedium'=>'x-fa fa fa-shield',
            'iconClassLarge'=>'x-fa fa fa-shield',
        ]);        
    }
    
}
