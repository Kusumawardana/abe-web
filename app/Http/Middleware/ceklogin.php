<?php

namespace App\Http\Middleware;

use Closure;

class ceklogin
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
        $value = $request->session()->get('login');
        $value2 = $request->session()->get('pengguna');
        if (isset($value)) {
            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
