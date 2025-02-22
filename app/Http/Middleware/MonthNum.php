<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MonthNum
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
        //middleware
        if($request->num > 3){
            return redirect('month/1');
        }
        return $next($request);
    }
}
