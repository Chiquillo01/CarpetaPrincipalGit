<?php


use Illuminate\Support\Facades\Route;
// Importar los controladores necesarios
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CarritoController;

/* Vistas Principales */
Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/privada', "secret")->middleware('auth')->name('privada');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/perfil', [LoginController::class, 'mostrarPerfil'])->name('profile')->middleware('auth');

/* Mostrar el catalogo */
Route::get('/catalogo', [CatalogoController::class, 'mostrarCatalogo'])->name('catalogo');
Route::get('/mostrar-catalogo', [CatalogoController::class, 'mostrarCatalogo'])->name('mostrarCatalogo');

/* Mostrar categorias */
Route::get('/categorias', [CategoriaController::class, 'mostrarCategorias'])->name('categorias');

/* Mostrar carrito */
Route::get('/carrito', [CarritoController::class, 'mostrarCarrito'])->name('carrito.mostrar');
Route::post('/carrito/agregar/{productoId}', [CarritoController::class, 'agregarAlCarrito'])->name('carrito.agregar');
Route::delete('/carrito/eliminar/{carritoId}', [CarritoController::class, 'eliminarDelCarrito'])->name('carrito.eliminar');

/* Mostrar las vistas de modificación de los usuarios */
Route::get('/profile/edit-nick', [LoginController::class, 'editNick'])->name('editNick');
Route::post('/profile/update-nick', [LoginController::class, 'updateNick'])->name('updateNick');
Route::get('/profile/edit-email', [LoginController::class, 'editEmail'])->name('editEmail');
Route::post('/profile/update-email', [LoginController::class, 'updateEmail'])->name('updateEmail');

