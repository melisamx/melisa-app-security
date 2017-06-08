<?php

namespace App\Security\Http\Middleware;

use Closure;

class CheckIsUserActivated
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth = auth();
        $user = $auth->user();
        
        if( !is_null($user) && $user->active) {
            return $next($request);            
        }
        
        if( is_null($user)) {
            return $next($request);
        }

        melisa('logger')->error('Your username is not active');  
        $auth->logout();
        
        if ($request->ajax() || $request->expectsJson()) {
            return response()->data(false);
        }
                
        return redirect('../login')
            ->with('message', 'Tu usuario se encuentra desactivado, en cuanto el administrador lo active podras ingresar');
    }
}
