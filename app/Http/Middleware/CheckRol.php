<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->rol->key == 'admin'){
            return $next($request);
        }else if(auth()->user()->rol->key == 'editorial'){
            return redirect('/admin');
        }else{
            return redirect('/');
        }
    }
}
