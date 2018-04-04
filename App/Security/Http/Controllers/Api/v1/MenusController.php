<?php

namespace App\Security\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Core\Logics\Menus\Hierarchical;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class MenusController extends Controller
{
    
    public function byKey(
        $key,
        Hierarchical $logic
    )
    {
        $result = $logic->get($key);
        return response()->data($result);
    }
    
}
