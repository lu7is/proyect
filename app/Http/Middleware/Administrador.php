<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){

        /**  switch(Auth::user()->Rol){

            case('administrador'):
                return $next($request);

            case('cliente'):
                 return redirect('index');

           
if (! Auth::check()) {
                   return redirect()->route('login');
               }
           
               if (Auth::user()->Rol=='administrador' ) {
                  // return redirect()->route('superadmin');
                  return $next($request); 
               }
           
               if (Auth::user()->Rol=='cliente') {
                   return redirect()->route('Ind');
               }





           }
        }
        */
        if(Auth::check()&& Auth::user()->Rol=='administrador'){
            return redirect()->route('Ind');
        }
           
           
               
           
               
           
               
           
              
           

        //return redirect('/');
    }
}
