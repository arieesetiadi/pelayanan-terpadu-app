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

        // Boleh masuk jika pengguna adalah seorang Pelapor
        if (auth()->user()->jenis_pengguna == 'Pelapor') {
            return $next($request);
        } else {
            return redirect()->to('/login');
        }
    }
}
