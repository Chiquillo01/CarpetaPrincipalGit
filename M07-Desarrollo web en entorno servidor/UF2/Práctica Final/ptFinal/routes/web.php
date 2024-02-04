<?php


use Illuminate\Support\Facades\Route;
// Importar los controladores necesarios
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\AdminController;

/* Vistas Principales */

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');

// Rutas para el usuario
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

Route::middleware(['auth', 'admin'])->group(function () {
    // Rutas para el usuario administrador
    Route::view('/admin/privada', 'admin.adminSecret')->middleware('auth', 'admin')->name('admin.privada');

    // Rutas para el catálogo de productos
    Route::get('/admin/catalogo', [AdminController::class, 'showCatalogo'])->name('admin.catalogo');
    Route::get('/admin/catalogo/crear', [AdminController::class, 'crearProductoForm'])->name('admin.catalogo.crear.form');
    Route::post('/admin/catalogo/crear', [AdminController::class, 'crearProducto'])->name('admin.catalogo.crear');
    Route::get('/admin/catalogo/editar/{id}', [AdminController::class, 'editarProductoForm'])->name('admin.catalogo.editar.form');
    Route::post('/admin/catalogo/editar/{id}', [AdminController::class, 'editarProducto'])->name('admin.catalogo.editar');
    Route::delete('/admin/catalogo/eliminar/{id}', [AdminController::class, 'eliminarProducto'])->name('admin.catalogo.eliminar');

    // Rutas para las categorías
    Route::get('/admin/categorias', [AdminController::class, 'showCategorias'])->name('admin.categorias');
    Route::get('/admin/categorias/crear', [AdminController::class, 'crearCategoriaForm'])->name('admin.categorias.crear.form');
    Route::post('/admin/categorias/crear', [AdminController::class, 'crearCategoria'])->name('admin.categorias.crear');
    Route::get('/admin/categorias/editar/{id}', [AdminController::class, 'editarCategoriaForm'])->name('admin.categorias.editar.form');
    Route::post('/admin/categorias/editar/{id}', [AdminController::class, 'editarCategoria'])->name('admin.categorias.editar');
    Route::delete('/admin/categorias/eliminar/{id}', [AdminController::class, 'eliminarProducto'])->name('admin.categorias.eliminar');

    // Rutas para usuarios
    Route::get('/admin/usuarios', [AdminController::class, 'showUsuarios'])->name('admin.usuarios');
    Route::get('/admin/usuarios/crear', [AdminController::class, 'crearUsuarioForm'])->name('admin.usuarios.crear.form');
    Route::post('/admin/usuarios/crear', [AdminController::class, 'crearUsuario'])->name('admin.usuarios.crear');
    Route::get('/admin/usuarios/editar/{id}', [AdminController::class, 'editarUsuarioForm'])->name('admin.usuarios.editar.form');
    Route::post('/admin/usuarios/editar/{id}', [AdminController::class, 'editarUsuario'])->name('admin.usuarios.editar');
    Route::delete('/admin/usuarios/eliminar/{id}', [AdminController::class, 'eliminarUsuario'])->name('admin.usuarios.eliminar');
});
