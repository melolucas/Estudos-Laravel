<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function index () {
        return view('homepage');
    }

    public function save (Request $request) {
        print_r($request->input());
    }
}
