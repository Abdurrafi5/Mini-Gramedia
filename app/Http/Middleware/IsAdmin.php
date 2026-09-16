<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role == 'admin' && Auth::check()) {
            return $next($request);
    } else if (Auth::check()) {
        return redirect()->route('home')->with('error', 'Anda tidak memiliki izin akses');
    } else {
        return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu!');
    }
    }
}
