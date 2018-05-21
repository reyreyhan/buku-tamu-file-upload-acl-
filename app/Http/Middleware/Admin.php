<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if(session('sessionUser')[0]->role->role == 'Admin') {
          return $next($request);
        } else {
          return redirect('/profile');
        }
    }
}
