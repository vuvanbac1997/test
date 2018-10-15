<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class user
{
    public function handle($request, Closure $next){

        if (Auth::user()->hasRole('user')){
            return $next($request);
        }
        else return redirect('/');
    }
}