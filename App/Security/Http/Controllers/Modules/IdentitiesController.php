<?php

namespace App\Security\Http\Controllers\Modules;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Security\Modules\Desktop\Identities\SelectModule;
use App\Security\Modules\Desktop\Identities\ViewModule;
use App\Security\Modules\Desktop\Identities\AddModule;
use App\Security\Modules\Desktop\Identities\DeleteModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class IdentitiesController extends Controller
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
