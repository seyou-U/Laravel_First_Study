<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 特定のルートに対してミドルウェアを割り当てたい時は、middlewareメソッドを呼び出す
Route::get('hello', [HelloController::class, 'index'])
    ->middleware('group-name');

//
Route::middleware('auth')->group(function () {
    Route::get('people', [PeopleController::class, 'index'])->name('people.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
