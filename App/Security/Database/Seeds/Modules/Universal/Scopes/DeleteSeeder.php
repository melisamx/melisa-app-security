<?php namespace App\Security\Database\Seeds\Modules\Universal\Scopes;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Eliminar ámbito',
                'url'=>'/security.php/scopes/delete/',
                'description'=>'Módulo para eliminar ámbito',
                'task'=>[
                    'key'=>'task.security.scopes.delete',
                    'name'=>'Acceso a eliminar ámbito',
                    'description'=>'Permitir eliminar ámbito',
                    'pattern'=>'delete'
                ],
                'event'=>[
                    'key'=>'event.security.scopes.delete.success',
                    'description'=>'Ámbito eliminado'
                ],
            ],
        ]);
        
    }
    
}
