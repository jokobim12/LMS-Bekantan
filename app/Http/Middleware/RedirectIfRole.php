<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class RedirectIfRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (\Illuminate\Support\Facades\Auth::check()) {
            $user = \Illuminate\Support\Facades\Auth::user();
            if ($user->role && $user->role->name === 'manager') {
                return redirect()->route('manajer.dashboard');
            } elseif ($user->role && $user->role->name === 'pengajar') {
                return redirect()->route('pengajar.dashboard');
            } elseif ($user->role && $user->role->name === 'mahasiswa') {
                return redirect()->route('mahasiswa.dashboard');
            }
        }
        return $next($request);
    }
}
