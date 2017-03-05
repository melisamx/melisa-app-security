<?php namespace App\Security\Database\Seeds\Modules\Desktop\Scopes;

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
                'name'=>'Ver ámbitos',
                'url'=>'/security.php/modules/scopes/view',
                'description'=>'Módulo interfaz para ver ámbitos',
                'nameSpace'=>'Melisa.security.view.desktop.scopes.view.Wrapper',
                'task'=>[
                    'key'=>'task.security.scopes.view.access',
                    'name'=>'Acceso a ver ámbitos de security',
                    'description'=>'Permitir acceso a ver ámbitos',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.security.scopes.view.access',
                    'name'=>'Opción para ver ámbitos',
                    'text'=>'Ámbitos',
                    'iconClassSmall'=>'x-fa fa fa-sitemap',
                    'iconClassMedium'=>'x-fa fa fa-sitemap',
                    'iconClassLarge'=>'x-fa fa fa-sitemap',
                ],
                'menu'=>[
                    [
                        'key'=>'menu.security.scopes.view.access',
                        'name'=>'Menú crud de ámbitos',
                        'options'=>[
                            'option.security.scopes.add.access',
                            'option.security.scopes.update.access',
                            'option.security.scopes.remove.access',
                        ]
                    ]
                ],
                'event'=>[
                    'key'=>'event.security.scopes.view.access',
                    'description'=>'Acceso al módulo ver ámbitos'
                ]
            ],
        ]);
        
    }
    
}
