<?php namespace App\Security\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Security\Modules\Users\SelectModule;

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
    
}
