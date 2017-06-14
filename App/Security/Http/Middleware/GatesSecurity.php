<?php

namespace App\Security\Http\Middleware;

use Closure;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class GatesSecurity
{
    
    public function handle($request, Closure $next, $gate = '*')
    {        
        // Check if a user is logged in.
        $user = $request->user();
        
        if (!$user) {
            return $this->cancelAction($request);
        }
        
        if( !app('security')->isAllowed($gate, true)) {
            return response()->data(false);
        }
        
        return $next($request);        
    }
    
    public function cancelAction(&$request)
    {
        if($request->ajax() || $request->expectsJson()) {
            melisa('logger')->error('User not logged in');
            return response()->data(false);
        }
        
        return redirect('../login')
            ->with('message', 'Tu sesión ha caducado, ingrese nuevamente');
    }
    
}
