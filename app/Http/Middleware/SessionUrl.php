<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionUrl
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
        $sessionUrl = $request->session()->get(0);
        if($sessionUrl != null)
        {
            return $next($request);
        }
        else
        {
            return redirect('/login');
        }
    }
}
