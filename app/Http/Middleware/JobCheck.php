<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class JobCheck
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
        if(Auth::user()->job_id != 1){
             abort(401);
        }
        return $next($request);
    }
}
