<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class cek_login_petugas
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
        if(Session::get('login_status_petugas')!=true){
            return redirect('login_petugas');
        
        }
        return $next($request);
    }
}
