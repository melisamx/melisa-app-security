<?php namespace App\Security\Database\Seeds\Modules\Phone\Users;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SelectSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Seleccionar usuarios versión phone',
                'url'=>'/security.php/modules/users/selectPhone',
                'description'=>'Módulo interfaz de usuario para seleccionar usuarios versión phone',
                'nameSpace'=>'Melisa.security.view.phone.users.select.Wrapper',
                'task'=>[
                    'key'=>'task.security.phone.users.select.access',
                    'name'=>'Acceso a seleccionar usuarios versión phone',
                    'description'=>'Permitir acceso a seleccionar usuarios versión phone',
                    'pattern'=>'access'
                ],
                'event'=>[
                    'key'=>'event.security.users.select.access',
                    'description'=>'Acceso al módulo seleccionar usuarios versión phone'
                ],
            ],
        ]);
        
    }
    
}
