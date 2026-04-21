<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Servicio;

use App\Http\Controllers\ServicioController;

Route::middleware(['auth'])->group(function () {
    Route::resource('servicios', ServicioController::class);
});


Route::get('/servicios/{id}/editar', [ServicioController::class, 'edit'])->name('servicios.edit');


Route::put('/servicios/{id}', [ServicioController::class, 'update'])->name('servicios.update');


Route::delete('/servicios/{id}', [ServicioController::class, 'destroy'])->name('servicios.destroy');


use App\Http\Controllers\UsuarioController;

Route::middleware(['auth'])->group(function () {
    Route::resource('usuario', UsuarioController::class);
});



Route::get('/', function () {
    // Traemos todos los servicios de la base de datos para la vista principal
    return view('welcome', [
        'servicios' => Servicio::all()
    ]);
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
