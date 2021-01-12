<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function index () {
        return view('homepage');
    }

    public function sendMessage (Request $request) {
        $message = $request->query('message'); 
    }
}
