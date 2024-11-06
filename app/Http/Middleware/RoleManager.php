<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $authUserRole = Auth::user()->user_type;

        // Check if the user has the required role
        if ($role === 'admin' && $authUserRole === 'admin') {
            return $next($request);
        } elseif ($role === 'teacher' && $authUserRole === 'teacher') {
            return $next($request);
        } elseif ($role === 'user' && $authUserRole === 'student') {
            return $next($request);
        }

        // Redirect based on the actual user role if it doesn't match the required role
        return match($authUserRole) {
            'admin' => redirect()->route('admin.index'),
            'teacher' => redirect()->route('teacher.index'),
            'user' => redirect()->route('dashboard'),
            default => redirect()->route('login'),
        };
    }
}
