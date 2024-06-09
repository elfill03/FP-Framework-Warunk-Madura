<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        if ($user->role != $role) {
            return abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}