<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginCheck01
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
        if(session()->has('user_id')){
            $user_id = $request->session()->get('user_id');
            return redirect(route('user-page',['user_id'=>1]));
        }else{
            return $next($request);
        }
    }
}
