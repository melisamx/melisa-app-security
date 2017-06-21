<?php

namespace App\Security\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Security\Modules\Desktop\RbacRoles\SelectModule;
use App\Security\Modules\Desktop\RbacRoles\ViewModule;
use App\Security\Modules\Desktop\RbacRoles\AddModule;
use App\Security\Modules\Desktop\RbacRoles\DeleteModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class RbacRolesController extends Controller
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
