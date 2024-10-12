<?php

use App\Http\Middleware\HelloMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // グループとして登録したい場合はこのように記述を行う
        $middleware->appendToGroup('group-name', [
            HelloMiddleware::class,
        ]);

        // グローバルミドルウェア(全てのアクセスで呼び出す)を定義する場所はLaravel11だとこの箇所になる
        // $middleware->append(HelloMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
