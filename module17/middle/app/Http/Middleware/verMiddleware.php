<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class verMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $version = $request->query('ID');
        if ($version == 1122) {
            return $next($request);
        }
        return response()->json(['message' => 'You are not authorized to access this page from middleware'], 401);
    }
}
