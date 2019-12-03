<?php

namespace App\Http\Middleware;

use Closure;

class AccessCode
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
        if(session('accesscode') !== env('ACCESS_CODE')){
            $request->session()->flash('message.content', 'You must enter an access code to view this website');
            $request->session()->flash('message.type', 'danger');

            return redirect()->action('PageController@home');
        }

        return $next($request);
    }
}
