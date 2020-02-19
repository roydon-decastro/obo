<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class VerifyIfActive
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
        if(!auth()->user()->isActive()) {
            return redirect(route('kiosk.index'));
        }
        return $next($request);
    }
}
