<?php

namespace App\Http\Middleware;

use App\Http\Middleware\authenticate;
use Closure;
use Auth;

class MustBeAdmin
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
        if(!$request->user())
        {
            return redirect('/');
        }
        if($request->user()->isAdmin())
        {
            return $next($request);
        }
        return redirect('/');
    }
}
