<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) // If the user is not logged in
            return redirect()->route('sign-up.index');

        $user = Auth::user();

        if ($user && in_array($user->role_id, $roles)) {
            return $next($request);
        }

        return redirect()->route('home.index')->with('error', 'You do not have access to this page.');
    }
}
