<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use App\Http\Middleware\AdminAuth;

class Kernel extends HttpKernel
{
    /**
     * Глобальные middleware, выполняются для каждого запроса.
     */
    protected $middleware = [
        // Здесь Laravel добавляет свои глобальные middleware
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \Illuminate\Foundation\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    protected $routeMiddleware = [
        'admin' => \App\Http\Middleware\AdminAuth::class,
    ];
}
