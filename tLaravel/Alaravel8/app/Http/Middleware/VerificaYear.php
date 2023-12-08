<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificaYear
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
    	$year = $request->route("year"); //Recibiendo el par�metro.
    	
    	if (is_null($year) || $year != 2021) { //Validando el par�metro.
    		return redirect("/"); //Si el par�metro no es 2021 se redirige a la raiz.
    	}
    	
        return $next($request);
    }
}
