<?php namespace App\Security\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Security\Modules\Users\SelectModule;
use App\Security\Modules\Users\ViewModule;
use App\Security\Modules\Users\AddModule;
use App\Security\Modules\Users\DeleteModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UsersController extends Controller
{
    
    public function selectPhone(SelectModule $module)
    {
        
        return $module->render();
        
    }
    
    public function view(ViewModule $module)
    {
        
        return $module->render();
        
    }
    
    public function add(AddModule $module)
    {
        
        return $module->render();
        
    }
    
    public function delete(DeleteModule $module)
    {
        
        return $module->render();
        
    }
    
}
