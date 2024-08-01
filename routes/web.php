<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GuardiaController;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\PrisioneroController;

Route::get('/', function () {
    return view('visitas.index');
});

Route::resource('usuarios', UsuarioController::class);
Route::resource('guardias', GuardiaController::class);
Route::resource('visitantes', VisitanteController::class);
Route::resource('prisioneros', PrisioneroController::class);
