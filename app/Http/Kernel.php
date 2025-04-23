<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\Authenticate;


class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware
        
        \Illuminate\Http\Middleware\HandleCors::class,
        
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
    
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        'auth' => Middleware\Authenticate::class, // Uncomment this line
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        // ... other middleware ...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'admin.auth' => \App\Http\Middleware\AdminAuth::class,
        // ...
    ];
}
