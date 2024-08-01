<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GuardiaController;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\PrisioneroController;
use App\Http\Controllers\VisitaController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('guardias', GuardiaController::class);
Route::resource('visitantes', VisitanteController::class);
Route::resource('prisioneros', PrisioneroController::class);
Route::resource('visitas', VisitaController::class);
