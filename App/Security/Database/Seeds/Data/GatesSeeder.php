<?php

namespace App\Security\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\Gates;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class GatesSeeder extends InstallSeeder
{
    
    public function run()
    {        
        Gates::updateOrCreate([
            'key'=>'*',
            'description'=>'All actions'
        ]);        
    }
    
}
