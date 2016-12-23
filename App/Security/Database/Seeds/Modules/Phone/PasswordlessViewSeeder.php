<?php namespace App\Security\Database\Seeds\Modules\Phone;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessViewSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Ver autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                'url'=>'/security.php/modules/passwordless/viewPhone',
                'description'=>'Módulo interfaz de usuario para ver autentificaciones de usuarios con enlace magico via correo electronico  versión phone',
                'nameSpace'=>'Melisa.security.view.phone.passwordless.view.Wrapper',
                'task'=>[
                    'key'=>'task.security.phone.passwordless.view.access',
                    'name'=>'Acceso a ver autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                    'description'=>'Permitir acceso a ver autentificaciones de usuarios con enlace magico via correo electronico versión phone',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.security.phone.passwordless.view.access',
                    'name'=>'Opción para ver autentificaciones de usuarios con enlace magico via correo electronico en la versión phone',
                    'text'=>'Passwordless',
                    'iconClassSmall'=>'x-fa fa fa-key',
                    'iconClassMedium'=>'x-fa fa fa-key',
                    'iconClassLarge'=>'x-fa fa fa-key',
                ],
                'event'=>[
                    'key'=>'event.security.passwordless.view.access',
                    'description'=>'Acceso al módulo para ver security versión phone'
                ],
            ],
        ]);
        
        $this->installAssetCss('asset.security.phone.passwordless.view', [
            'name'=>'CSS view passwordless version phone',
            'path'=>'/security/css/passwordless-phone.css',
            'version'=>'1.0.0',
        ]);
        
    }
    
}
