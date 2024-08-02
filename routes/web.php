<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('guardias.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
