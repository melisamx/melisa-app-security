<?php namespace App\Security\Http\Middleware;

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
        if (!$user = $request->user()) {
            return response()->data(false);
        }
        
        if( !app('security')->isAllowed($gate)) {
            return response()->data(false);
        }
        
        return $next($request);
        
    }
    
}
