<?php

namespace App\Http\Controllers;


Class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }




    public function bemvindo($usuario)
    {
        $u = request('usuario');
        return "Olá {$usuario}, por gentileza vai tomar no cu! Agradecemos o contato!";    }
}