<?php

namespace App\Security\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Security\Logics\Proxy\LoginLogic;
use App\Security\Http\Requests\Proxy\LoginRequest;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ProxyController extends Controller
{
    
    public function login(
        LoginLogic $logic,
        LoginRequest $request
    )
    {
        $result = $logic->run($request->all());
        return response()->data($result);
    }
    
    public function logout(
        LoginLogic $logic
    )
    {
        $logic->logout();
        return response()->data(true);
    }
    
}
