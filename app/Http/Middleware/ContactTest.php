<?php

namespace App\Http\Middleware;

use Closure;

class ContactTest
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
    	if ($request->input('firstName')=='filip'){
    		redirect('www.seznam.cz');
	    }
        return $next($request);
    }
}
