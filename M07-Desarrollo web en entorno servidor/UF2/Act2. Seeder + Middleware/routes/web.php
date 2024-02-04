<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pokemons', PokemonController::class);

Route::get('/show', [PokemonController::class, 'show'])
    ->name('pokemons.show');

// Login y autorización de admin
Route::get('/login', [UsersController::class, 'login'])
    ->name('login');

Route::post('/login/auth', [UsersController::class, 'auth'])
    ->name('auth');

// Views del middleware
Route::middleware([Authenticate::class])->group(function () {
    Route::view('/IsAdmin', 'pokemon')->name('IsAdmin');

    // Crear
    Route::post('/create', [PokemonController::class, 'store'])
        ->name('pokemons.store');

    // Editar
    Route::get('{poke}/edit', [PokemonController::class, 'edit'])
        ->name('pokemons.edit');

    // Actualizar
    Route::put('/{poke}', [PokemonController::class, 'update'])
        ->name('pokemons.update');

    // Eliminar
    Route::delete('/{poke}', [PokemonController::class, 'destroy'])
        ->name('pokemons.destroy');

    // Salir
    Route::get('/logout', [UsersController::class, 'logout'])
        ->name('logout');
});
