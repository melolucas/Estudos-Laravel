<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendController extends Controller
{
    public function index () {
        return view('homepage');
    }

    public function save (Request $request) {
        
        $request->validate([
            'message'=>'required'
        ]);

        $query = DB::table('messages')->insert([
            'message'=>$request->input('message')
        ]);

        if ($query) {
            return back()->with('success', "Mensagem enviada com sucesso!");
        } else {
            return back()->with('fail', "Oops! Ocorreu um erro ao enviar sua mensagem, tente novamente.");
        }
    }
}
