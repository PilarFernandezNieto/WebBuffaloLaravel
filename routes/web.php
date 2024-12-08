<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MusicoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/404', function() {
    return view('404');
});

Route::prefix('admin')->middleware(['auth', 'verified'])->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->middleware(['auth', 'verified', 'is_admin'])->name('index');

    // Músicos - definir las rutas con resource ya crea los metodos necesarios: post, get, delete, update
    Route::resource('musicos', MusicoController::class);
});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
