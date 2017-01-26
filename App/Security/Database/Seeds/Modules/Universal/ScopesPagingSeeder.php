<?php namespace App\Security\Database\Seeds\Modules\Universal;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ScopesPagingSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Paginar lista de ambitos',
                'url'=>'/security.php/scopes/',
                'description'=>'Módulo para paginar lista de ambitos',
                'task'=>[
                    'key'=>'task.security.scopes.paging',
                    'name'=>'Paginar lista de ambitos',
                    'description'=>'Permitir paginar lista de ambitos',
                    'pattern'=>'read'
                ],
            ],
        ]);
        
    }
    
}
