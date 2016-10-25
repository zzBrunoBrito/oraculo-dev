<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class logged
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
        $response = $next($request);
        $path= $request->path();
        if(Auth::guest() && (($path != '/') &&
                      ($path != 'register') &&
                      ($path != 'login')))
        {
            return redirect('/login');
        }else{
            return $response;
        }

    
    }
}
