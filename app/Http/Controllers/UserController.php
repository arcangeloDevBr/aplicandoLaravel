<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;    

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return  view ("usuarios.index",[
            'users' => $users
        ]);
    }
    

    /**
     * Mostra um usuário
     *
     * @param  \App\Models\User  $user
     * @return \App\Models\User
     */
public function show(User $user)
{
    return view('usuarios.show', ['user' => $user]);
}
}