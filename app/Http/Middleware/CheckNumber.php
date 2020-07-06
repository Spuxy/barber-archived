<?php

namespace App\Http\Middleware;

use Closure;

class CheckNumber
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
    	if (rand(0,10)>5){
	        dump('GG BRO !');
    	}
        return $next($request);
    }
}
