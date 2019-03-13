<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Response;

class KeyAuthMiddleware
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
        if($request->has('auth_key')) {
            return $next($request);
        } else {
            $response = new Response("Auth Key parameter not found.");
            return $response;
        }
        
    }
}
