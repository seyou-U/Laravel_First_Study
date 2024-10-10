<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function index(Request $request)
    {
        $loopData = collect($request)->get('data');
        return view('hello.index', ['data'=>$loopData]);
    }
}
