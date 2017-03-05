<?php namespace App\Security\Database\Seeds\Modules\Universal\Passwordless;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Crear autentificaciones de usuarios con enlace magico via correo electronico',
                'url'=>'/security.php/passwordless/',
                'description'=>'Módulo para crear autentificaciones de usuarios con enlace magico via correo electronico',
                'task'=>[
                    'key'=>'task.security.passwordless.create',
                    'name'=>'Acceso para crear autentificaciones de usuarios con enlace magico via correo electronico',
                    'description'=>'Permitir crear autentificaciones de usuarios con enlace magico via correo electronico',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.security.passwordless.create.success',
                    'description'=>'Autentificacion de usuario creada con enlace magico creado'
                ]
            ],
        ]);
        
    }
    
}
