<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginCheck1
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
            $user_id = session('user_id');
            return redirect(route('user_page',['user_id'=>$user_id]));
        }else{
            return $next($request);
        }
    }
}
