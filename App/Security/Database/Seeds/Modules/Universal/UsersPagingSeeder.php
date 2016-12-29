<?php namespace App\Security\Database\Seeds\Modules\Universal;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UsersPagingSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Paginar lista de usuarios',
                'url'=>'/security.php/users/',
                'description'=>'Módulo para paginar lista de usuarios',
                'task'=>[
                    'key'=>'task.security.users.paging',
                    'name'=>'Paginar lista de usuarios',
                    'description'=>'Permitir paginar lista de usuarios',
                    'pattern'=>'read'
                ],
            ],
        ]);
        
    }
    
}
