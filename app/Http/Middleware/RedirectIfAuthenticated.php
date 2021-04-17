<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(isset(session()->get('redircitURl')[0])){
                return redirect(session()->get('redircitURl')[0]);
            }else{
                return redirect('http://abudiyab.test');

            }
            if (Auth()->user()->canAccessDashboard()) {
                return redirect(RouteServiceProvider::ADMIN);
            }else{
                return redirect(RouteServiceProvider::HOME);
            }
        }
        return $next($request);
    }
}
