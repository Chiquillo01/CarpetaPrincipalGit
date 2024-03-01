<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\EntrenadorController;
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

/*
Route::get('/', function () {
    return view('welcome');
});*/

//funcionalidad de pokemons
Route::resource('pokemons', PokemonController::class);
//Route::put('pokemons/{id}', 'PokemonController@update')->name('pokemons.update');
//Route::delete('pokemons/{id}', 'PokemonController@destroy')->name('pokemons.destroy');
//entrenadores
Route::resource('entrenadores', EntrenadorController::class);
