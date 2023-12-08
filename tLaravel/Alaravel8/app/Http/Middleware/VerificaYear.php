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
    	$year = $request->route("year"); //Recibiendo el parámetro.
    	
    	if (is_null($year) || $year != 2021) { //Validando el parámetro.
    		return redirect("/"); //Si el parámetro no es 2021 se redirige a la raiz.
    	}
    	
        return $next($request);
    }
}
