<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // クロージャ(無名関数を用いた記述)でhelloフォルダ内にあるindex.blade.phpテンプレートビューに対し、view_messageという値を設定する処理を作成
        // $viewはベンダーファイルのViewクラスのインスタンスを指している
        View::composer(
            'hello.index', 'App\Http\Composers\HelloComposer'
        );
    }
}
