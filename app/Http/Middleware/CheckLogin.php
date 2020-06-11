<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckLogin
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
        if(isset(Auth::user()->email)){
            return $next($request);
        }
                   
        else{
            return redirect('logAdmin');
        }
    }
}
