<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/usuarios', [UserController::class, 'index']);
Route::get('/admin/usuarios/{user}', [UserController::class,'show']);
Route::get('/login', [LoginController::class,'index']);
Route::get('/entrou', function (){
    }
);