<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 特定のルートに対してミドルウェアを割り当てたい時は、middlewareメソッドを呼び出す
Route::get('/hello', [HelloController::class, 'index'])
    ->middleware('group-name');
