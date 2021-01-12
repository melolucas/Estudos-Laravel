<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function index (Request $request) {
        $message = $request->query('message');

        return view('homepage', ['message' => $message]);
    }
}
