<?php

namespace App\Security\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Security\Htpp\Requests\My\User\ChangePassRequest;
use App\Security\Logics\My\User\ChangePassLogic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UserController extends Controller
{
    
    public function changePass(ChangePassRequest $request, ChangePassLogic $logic)
    {        
        return $this->responseJson($logic, $request);
    }
    
}
