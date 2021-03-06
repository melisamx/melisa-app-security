<?php namespace App\Security\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class ApplicationSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installApplication('security', [
            'name'=>'Security',
            'description'=>'Application Security',
            'nameSpace'=>'Melisa.security',
            'typeSecurity'=>'art'
        ]);
        
    }
    
}
