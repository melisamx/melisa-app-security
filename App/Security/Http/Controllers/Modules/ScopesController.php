<?php namespace App\Security\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Security\Modules\Scopes\ViewModule;
use App\Security\Modules\Scopes\AddModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ScopesController extends Controller
{
    
    public function view(ViewModule $module)
    {
        
        return $module->render();
        
    }
    
    public function add(AddModule $module)
    {
        
        return $module->render();
        
    }
    
}
