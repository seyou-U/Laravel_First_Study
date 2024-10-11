<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;

use Illuminate\Support\Facades\Log;

class HelloMiddleware
{
    /**
     * コントローラの前に実行するミドルウェア
     *
     * param Request $request リクエストの情報を管理するRequestインスタンス
     * param Closure $next Closureクラスのインスタンス
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $data = [
    //         ['name'=>'taro', 'mail'=>'taro@yamada'],
    //         ['name'=>'hanako', 'mail'=>'hanako@flower'],
    //         ['name'=>'sachiko', 'mail'=>'sachico@happy'],
    //     ];
    //     $request->merge(['data'=>$data]);
    //     return $next($request);
    // }

    /**
     * コントローラの後に実行するミドルウェア
     *
     * param Request $request リクエストの情報を管理するRequestインスタンス
     * param Closure $next Closureクラスのインスタンス
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        // 送り返されるHTMLソースコードのテキストが入っている
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);
        $response->setContent($content);

        return $response;
    }
}
