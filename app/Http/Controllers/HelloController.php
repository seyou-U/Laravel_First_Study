<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{

    public function index()
    {
        return view('hello.index');
    }


    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインしてください。'];
        return view('hello.auth', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $loginInfo = ['email' => $email,
                      'password' => $password];

        // attemptメソッドは引数にメールアドレスとパスワードを渡し、ログインを実行する
        if (Auth::attempt($loginInfo)) {
            $message = 'ログインしました。(' . Auth::user()->name . ')';
        } else {
            $message = 'ログインに失敗しました。';
        }
        return view('hello.auth', compact('message'));
    }
}
