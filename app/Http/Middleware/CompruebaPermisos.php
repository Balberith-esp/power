<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CompruebaPermisos
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
        $isAdmin = false;
        if (session()->has('user')) {
            foreach(session()->get('user')->roles as $rol){
                if($rol->nombre === 'admin'){
                    $isAdmin = true;
                }
            }
            if($isAdmin){
                return $next($request);
            }else{
                return redirect()->route('home');
            }

        }
        else{
            return redirect()->route('home');
        }

    }
}
