<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ejemplo crear pokemon
//Route::post('pokemons', [PokemonController::class, 'store'])->name('pokemons.store');
//mostrar todos pokemon
Route::get('pokemons', [PokemonController::class, 'index'])->name('pokemons.index');
//mostrar unph pokemon
Route::get('pokemons/{id}', [PokemonController::class, 'show'])->name('pokemons.show');
//update
//Route::put('pokemons/{id}', [PokemonController::class, 'update'])->name('pokemons.update');
//delete
//Route::delete('pokemons/{id}', [PokemonController::class, 'destroy'])->name('pokemons.destroy');

