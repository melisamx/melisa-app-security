<?php namespace App\Security\Database\Seeds\Modules\Desktop\Passwordless;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Ver autentificaciones de usuarios con enlace magico via correo electronico',
                'url'=>'/security.php/modules/passwordless/view',
                'description'=>'Módulo interfaz para ver autentificaciones de usuarios con enlace magico via correo electronico',
                'nameSpace'=>'Melisa.security.view.desktop.passwordless.view.Wrapper',
                'task'=>[
                    'key'=>'task.security.passwordless.view.access',
                    'name'=>'Acceso a ver autentificaciones de usuarios con enlace magico via correo electronico',
                    'description'=>'Permitir acceso a ver autentificaciones de usuarios con enlace magico via correo electronico',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.security.passwordless.view.access',
                    'name'=>'Opción para ver passwordless',
                    'text'=>'Passwordless',
                    'iconClassSmall'=>'x-fa fa fa-key',
                    'iconClassMedium'=>'x-fa fa fa-key',
                    'iconClassLarge'=>'x-fa fa fa-key',
                ],
                'menu'=>[
                    [
                        'key'=>'menu.security.passwordless.view.access',
                        'name'=>'Menú crud de autentificaciones de usuarios con enlace magico via correo electronico',
                        'options'=>[
                            'option.security.passwordless.add.access',
                            'option.security.passwordless.update.access',
                            'option.security.passwordless.remove.access',
                        ]
                    ]
                ],
                'event'=>[
                    'key'=>'event.security.passwordless.view.access',
                    'description'=>'Acceso al módulo ver passwordless'
                ]
            ],
        ]);
        
    }
    
}
