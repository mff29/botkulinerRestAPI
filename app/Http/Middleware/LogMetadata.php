<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;


class LogMetadata
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $metadata = [
            'ip' => $request->ip(),
            'headers' => $request->headers->all(),
            'body' => $request->all(),
        ];

        Log::info('API Metadata:', $metadata);

        return $response;
    }
}
