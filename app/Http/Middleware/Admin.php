<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        if ( ! auth()->user() ){
            return redirect('/login34N4mira')->with('status', 'Mohon Login Terlebih Dahulu!');; 
        }else{
            return $next($request);
        }
        // elseif(auth()->user()->level == "admin"){
        //     //dd($request->all());
        //     return $next($request);
        // }else{
        //     return redirect('/dashboard'); 
        // }
    }
}