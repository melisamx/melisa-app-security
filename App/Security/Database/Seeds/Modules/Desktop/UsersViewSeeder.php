<?php namespace App\Security\Database\Seeds\Modules\Desktop;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UsersViewSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Ver usuarios',
                'url'=>'/security.php/modules/users/view',
                'description'=>'Módulo interfaz para ver users',
                'nameSpace'=>'Melisa.security.view.desktop.users.view.Wrapper',
                'task'=>[
                    'key'=>'task.security.users.view.access',
                    'name'=>'Acceso a ver usuarios',
                    'description'=>'Permitir acceso a ver usuarios',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.security.users.view.access',
                    'name'=>'Opción para ver usuarios',
                    'text'=>'Usuarios',
                    'iconClassSmall'=>'x-fa fa fa-user',
                    'iconClassMedium'=>'x-fa fa fa-user',
                    'iconClassLarge'=>'x-fa fa fa-user',
                ],
                'menu'=>[
                    [
                        'key'=>'menu.security.users.view.access',
                        'name'=>'Menú crud de usuarios',
                        'options'=>[
                            'option.security.users.add.access',
                            'option.security.users.update.access',
                            'option.security.users.remove.access',
                        ]
                    ]
                ]
            ],
        ]);
        
    }
    
}
