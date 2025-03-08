<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PuntuacionesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name('home');
Route::view("/","home")->name("home");

Route::resource('usuarios', UsuariosController::class)
->middleware('auth');

Route::resource('puntuaciones', PuntuacionesController::class)
->parameter('puntuaciones', 'puntuacion')
->middleware('auth');

Route::fallback(function(){
    return view('home');;
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
