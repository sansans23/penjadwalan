<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class UserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role_id)
    { 
        // return $next($request);
        if(!Auth::user()){
            return redirect('login');
        } elseif(Auth::user()->role_id == $role_id){
            return $next($request);
        } else {
            return abort(404);
        }
    }
}
