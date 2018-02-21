<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) //Closure is like a callback function in javascript
    {
        if(Auth::check()){
            return $next($request);
        }
       else{
            return redirect('/login');
       }
    }
}
