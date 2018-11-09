<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
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
        //check in session which is the local, default is it 
        $locale = session('locale', 'it');

        \App::setLocale($locale);

        return $next($request);
    }
}
