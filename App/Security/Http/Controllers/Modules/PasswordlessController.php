<?php namespace App\Security\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Security\Modules\Passwordless\ViewModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessController extends Controller
{
    
    public function viewPhone(ViewModule $module)
    {
        
        return $module->render();
        
    }
    
}
