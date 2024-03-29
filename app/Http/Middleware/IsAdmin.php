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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

       // dd(Auth::user()->roles);
        if (Auth::check() && ( Auth::user()->roles->contains('nom', 'superAdmin')
         || Auth::user()->roles->contains('nom', 'administrateur')) ) {

             return $next($request);
         }

          return redirect()->route('admin.logout');


    }
}
