<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!is_null(request()->user())) {
            return $next($request);
        }else if (!is_null(Auth::guard('client')->user())) {
            
            return redirect()->route('client.login');

        }  else {
            return redirect('login');
        }
    }
}
