<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Redirect;
class MultiAuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {

        if(auth()->user()->type == $userType){
            return $next($request);

        }
        if(Auth::user()->type == 3){
            return Redirect::to('superadmin/dashboard');
        }elseif(Auth::user()->type ==2){
            return Redirect::to('admin/dashboard');
        }elseif(Auth::user()->type ==1){
            return Redirect::to('masyarakat/home');
        }else{
            return Redirect::to('/');
        }
        
    }
}
