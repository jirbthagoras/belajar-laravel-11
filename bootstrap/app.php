<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(\App\Http\Middleware\LogMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->dontReport(\App\Exceptions\ValidationError::class);

        $exceptions->renderable(function (\App\Exceptions\ValidationError $exception, \Illuminate\Http\Request $request) {
            return response("BAd REquest")->setStatusCode(400);
        });
    })->create();
