<?php namespace App\Security\Database\Seeds\Modules\Universal;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ScopesCreateSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Crear ámbito',
                'url'=>'/security.php/scopes/',
                'description'=>'Módulo para crear ámbito',
                'task'=>[
                    'key'=>'task.security.scopes.create',
                    'name'=>'Acceso para crear ambito',
                    'description'=>'Permitir crear ámbito',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.security.scopes.create.success',
                    'description'=>'Crear ámbito'
                ]
            ],
        ]);
        
    }
    
}
