<?php

namespace App\Http\Middleware;

use Closure;

class CheckContact
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
    	if ($request->input('firstName')=='Filip'){
    		dump('GG ITS CHECKCONTACTMIDDLEWARE');
//	       return redirect('/reservation');
    	}
        return $next($request);
    }
}
