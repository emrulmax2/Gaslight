<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class loggedin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!is_null(request()->user())) {
            
            return redirect('/');
        // }else if (!is_null(Auth::guard('client')->user())) {
            
        //     return redirect()->route('client.login');

        // }else if (!is_null(Auth::guard('admin')->user())) {
            
        //     return redirect()->route('admin.login');

        }  else {
            return $next($request);
        }
        
    }
}
