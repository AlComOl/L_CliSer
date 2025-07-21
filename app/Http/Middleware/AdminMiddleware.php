<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {    //si está autentificado
            if (auth()->user()->role == "admin") {   //si es role es admin
                return $next($request);    //significa continua
            }else{
                    //  dd("soy user y quiero ir a la pagina login");
                return redirect()->route('dashboard');
            }
        }
        //return redirect()->route('login');  //en caso contrario va al login
        return redirect()->route('dashboard');
    }
}
