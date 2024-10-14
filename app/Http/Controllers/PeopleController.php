<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller
{
    public function index(Request $request)
    {
        // ログインチェックを行うために処理を追加
        $user = Auth::user();
        return view('people.index', compact('user'));
    }
}
