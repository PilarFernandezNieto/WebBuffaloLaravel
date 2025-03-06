<?php

use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiscosController;
use App\Http\Controllers\MusicoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CamisetasController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\UserController;

// Zona pública
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/historia', [PaginasController::class, 'historia'])->name('historia');
Route::get('/banda', [PaginasController::class, 'banda'])->name('banda');
Route::get('/noticias', [PaginasController::class, 'noticias'])->name('noticias');
Route::get('/noticias/{noticia}', [PaginasController::class, 'mostrarNoticia'])->name('noticia.mostrar');
Route::get('/discografia', [PaginasController::class, 'discografia'])->name('discografia');
Route::get('/discografia/{disco}', [PaginasController::class, 'mostrarDisco'])->name('discografia.mostrar');
Route::get('/tienda', [PaginasController::class, 'tienda'])->name('tienda');
Route::get('/contacto', [PaginasController::class, 'contacto'])->name('contacto');
Route::get('/politica-privacidad', [PaginasController::class, 'politica'])->name('politica');




Route::get('/403', function() {
    return view('403');
});

// Route::get('/preview-email', function () {
//     $nombre = 'John Doe';
//     $email = 'johndoe@example.com';
//     $mensaje = 'Este es un mensaje de prueba para la previsualización del correo.';

//     // Renderiza la vista del correo como HTML
//     return new ContactForm($nombre, $email, $mensaje);
// });

Route::prefix('admin')->middleware(['auth', 'verified', 'is_admin'])->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('index');

    // Músicos - definir las rutas con resource ya crea los metodos necesarios: post, get, delete, update
    Route::resource('usuarios', UserController::class);
    Route::resource('musicos', MusicoController::class);
    Route::resource('noticias', NoticiaController::class);
    Route::resource('contenidos', ContenidoController::class);
    Route::resource('productos', ProductoController::class);
    Route::resource('discos', DiscosController::class);
    Route::resource('camisetas', CamisetasController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
