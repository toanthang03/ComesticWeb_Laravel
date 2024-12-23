<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\callback;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web:[
             __DIR__.'/../routes/web.php',
             __DIR__.'/../routes/admin.php'
        ],
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        // then:function(){
        //     Route::middleware(['web'])
        //         ->group(callback:__DIR__.'/../routes/admin.php');
        // },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append:[
            App\Http\Middleware\LocalizationMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
