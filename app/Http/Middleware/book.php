<?php

namespace App\Http\Middleware;

use Closure;

class book
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
        if($request->id > 0)
        {
            $request->session()->put('mid',$request->id);
            return response(view('book'));
        }
        

       else
        return $next($request);
    }
}
