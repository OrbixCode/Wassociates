<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class AdminAuthenticated
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
        // if(Auth::user()->role->name =='customer'){
        //     return redirect('/')->with('message',"You are not allow to access");
        // }
        return $next($request);
        
    }
}
