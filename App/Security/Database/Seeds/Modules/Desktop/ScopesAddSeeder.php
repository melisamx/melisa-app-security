<?php namespace App\Security\Database\Seeds\Modules\Desktop;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ScopesAddSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Agregar ámbito',
                'url'=>'/security.php/modules/scopes/add',
                'description'=>'Módulo interfaz para agregar ámbito',
                'nameSpace'=>'Melisa.security.view.desktop.scopes.add.Wrapper',
                'task'=>[
                    'key'=>'task.security.scopes.add.access',
                    'name'=>'Acceso a agregar ámbito',
                    'description'=>'Permitir acceso a agregar ámbito',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.security.scopes.add.access',
                    'name'=>'Opción para agregar ámbito',
                    'text'=>'Agregar ámbito'
                ]
            ],
        ]);
        
    }
    
}
