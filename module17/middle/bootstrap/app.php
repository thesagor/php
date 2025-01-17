<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //disbable middleware
        $middleware->validateCsrfTokens(except: [
            '*', // disable CSRF token validation for all routes
        ]);
        $middleware->throttleApi('5,1');


        //enable middleware
        //$middleware->append(['App\Http\Middleware\indoMiddleware::class']);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
