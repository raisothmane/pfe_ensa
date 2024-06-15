<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->user_type !== 'admin') {
            return redirect()->route('quiz.index')->with('error', 'You do not have permission to access this page.');
        }
        if (auth()->user()->user_type == 'user') {
            return redirect()->route('quiz.index');
        }
        
        return $next($request);
    }
}
