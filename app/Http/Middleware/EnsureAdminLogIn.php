<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureAdminLogIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $type)
    {
        if($type === 'admin' && !Auth::guard('admin')->check()){
            return redirect()->route('admin.getLoginForm');
        }

        if($type === 'user' && !Auth::check()){
            return redirect()->route('login');
        }

        return $next($request);
    }
}
