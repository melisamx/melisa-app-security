<?php namespace App\Security\Database\Seeds\Modules\Desktop;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ScopesViewSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Ver scopes',
                'url'=>'/security.php/modules/scopes/view',
                'description'=>'Módulo interfaz para ver scopes',
                'nameSpace'=>'Melisa.security.view.desktop.scopes.view.Wrapper',
                'task'=>[
                    'key'=>'task.security.scopes.view.access',
                    'name'=>'Acceso a ver scopes de security',
                    'description'=>'Permitir acceso a ver scopes',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.security.scopes.view.access',
                    'name'=>'Opción para ver scopes',
                    'text'=>'Ambitos',
                    'iconClassSmall'=>'x-fa fa fa-sitemap',
                    'iconClassMedium'=>'x-fa fa fa-sitemap',
                    'iconClassLarge'=>'x-fa fa fa-sitemap',
                ],
                'menu'=>[
                    [
                        'key'=>'menu.security.scopes.view.access',
                        'name'=>'Menú crud de scopes',
                        'options'=>[
                            'option.security.scopes.add.access',
                            'option.security.scopes.update.access',
                            'option.security.scopes.remove.access',
                        ]
                    ]
                ]
            ],
        ]);
        
    }
    
}
