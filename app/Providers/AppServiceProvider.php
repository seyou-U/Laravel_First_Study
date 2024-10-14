<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * サービスプロパイダの登録処理を行う。サービスを登録する処理を記述
     */
    public function register(): void
    {
        //
    }

    /**
     * アプリケーションサービスへのブートストラップ処理 (アプリケーションが起動する際に割り込んで実行される処理)を記述
     */
    public function boot(): void
    {
        //
    }
}
