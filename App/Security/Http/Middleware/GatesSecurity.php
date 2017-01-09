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
        
        if( !app('security')->isAllowed($gate)) {
            
            return false;
            
        }
        
        return $next($request);
        
    }
    
}
