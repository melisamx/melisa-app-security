<?php namespace App\Security\Database\Seeds\Modules\Phone;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessAddSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Agregar autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                'url'=>'/security.php/modules/passwordless/addPhone',
                'description'=>'Módulo interfaz de usuario para agregar autentificaciones de usuarios con enlace magico via correo electronico  versión phone',
                'nameSpace'=>'Melisa.security.view.phone.passwordless.add.Wrapper',
                'task'=>[
                    'key'=>'task.security.phone.passwordless.add.access',
                    'name'=>'Acceso a agregar autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                    'description'=>'Permitir acceso a agregar autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.security.phone.passwordless.add.access',
                    'name'=>'Opción para agregar autentificaciones de usuarios con enlace magico via correo electronico en la versión phone',
                    'text'=>'Agregar Passwordless',
                    'iconClassSmall'=>'x-fa fa fa-key',
                    'iconClassMedium'=>'x-fa fa fa-key',
                    'iconClassLarge'=>'x-fa fa fa-key',
                ],
                'event'=>[
                    'key'=>'event.security.passwordless.add.access',
                    'description'=>'Acceso al módulo para agregar autentificaciones de usuarios con enlace magico versión phone'
                ],
            ],
        ]);
        
    }
    
}
