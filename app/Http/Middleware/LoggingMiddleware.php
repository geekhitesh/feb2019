<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class LoggingMiddleware
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
        Log::info('Input Request:'.$request);
        $response = $next($request);

        Log::info('Output Response'. $response);
        return $response;
    }
}
