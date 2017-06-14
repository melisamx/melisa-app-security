<?php

namespace App\Security\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class GatesSystemsSeeder extends InstallSeeder
{
    
    public function run()
    {
        $this->installGateSystem('*', 'usergod');        
    }
    
}
