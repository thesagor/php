<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $query = $request->query('cowtype');
        if ($query == 'Jersey' || $query == 'Holstein' || $query == 'Angus' || $query == 'Hereford' || $query == 'Brahman') {
            return $next($request);
        } else {
            return response('Invalid cow type', 400);
        }
    }
}
