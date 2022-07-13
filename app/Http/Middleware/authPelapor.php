<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authPelapor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $to = $request->path();
        session()->put('to', $to);

        if (session('pelapor')) {
            return $next($request);
        } else {
            return redirect()->to('/login');
        }
    }
}