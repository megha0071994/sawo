<?php

namespace App\Http\Middleware;

use Closure;

class AdminSession
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
        if($request->session()->get('admin_session')){
            return $next($request);
        }
        return redirect('admin')->with('danger','You have no permission to access');
    }
}
