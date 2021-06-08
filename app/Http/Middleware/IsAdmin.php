<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if(auth()->user()->IsAdmin()){
            return $next($request);
        }else{
            return back()->with('error',"You don't have accedd to admin");;
        }
         return $next($request);
       /* if(auth()->user()->IsAdmin()){
            return $next($request);
        }
       return redirect('home')->with('error',"You don't have accedd to admin");*/
    }
}
