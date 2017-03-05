<?php namespace App\Security\Database\Seeds\Modules\Universal\Passwordless;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Paginar lista de passwordless',
                'url'=>'/security.php/passwordless/',
                'description'=>'Módulo para paginar lista de passwordless',
                'task'=>[
                    'key'=>'task.security.passwordless.paging',
                    'name'=>'Paginar lista de passwordless',
                    'description'=>'Permitir paginar lista de passwordless',
                    'pattern'=>'read'
                ],
            ],
        ]);
        
    }
    
}
