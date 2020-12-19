<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class TestMiddleware
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
//     echo 'this is a middleware <br> ';
//        return $next($request);
        
        $user = User::find(1);
        if ('faisal@gmail.com'== $user->email){
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
