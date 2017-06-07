<?php

namespace App\Security\Database\Seeds\Modules\Desktop\Users;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $this->installModule([
            [
                'name'=>'Agregar usuarios',
                'url'=>'/security.php/modules/users/add',
                'description'=>'Módulo interfaz para agregar usuarios',
                'nameSpace'=>'Melisa.security.view.desktop.users.add.Wrapper',
                'task'=>[
                    'key'=>'task.security.users.add.access',
                    'name'=>'Acceso a agregar usuarios',
                    'description'=>'Permitir acceso a agregar usuarios',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.security.users.add.access',
                    'name'=>'Opción para agregar usuarios',
                    'text'=>'Agregar usuarios'
                ],
                'event'=>[
                    'key'=>'event.security.users.add.access',
                    'description'=>'Acceso al módulo agregar usuarios'
                ]
            ],
        ]);        
    }
    
}
