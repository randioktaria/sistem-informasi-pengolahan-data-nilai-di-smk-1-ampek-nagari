<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Guru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::User()->level == 'guru') {
            return $next($request);
        }

        return redirect('/');
    }
}
