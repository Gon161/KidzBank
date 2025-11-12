<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login',[UsuarioController::class,'login'])->name('login');
Route::get('/Registro',[UsuarioController::class,'registro'])->name('registro');
