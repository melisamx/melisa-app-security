<?php namespace App\Security\Database\Seeds\Modules\Universal;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessCreateSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Crear autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                'url'=>'/security.php/passwordless/',
                'description'=>'Módulo para crear autentificaciones de usuarios con enlace magico via correo electronico  versión phone',
                'task'=>[
                    'key'=>'task.security.passwordless.create',
                    'name'=>'Acceso para crear autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                    'description'=>'Permitir crear autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.security.passwordless.create.success',
                    'description'=>'Autentificacion de usuario creada con enlace magico creada sastisfactoriamente'
                ],
            ],
        ]);
        
    }
    
}
