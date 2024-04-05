<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmarioController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ● POST - insertar una nueva pieza de ropa para un usuario en concreto
Route::post('/armario/{idUser}/crear', [ArmarioController::class, 'store']);
// ● DELETE - eliminar una pieza de ropa de un usuario en concreto
Route::delete('/armario/{idUser}/eliminar/{idArmario}', [ArmarioController::class, 'destroy']);
// ● GET - obtener información de toda la tabla armario
Route::get('/armario/ver', [ArmarioController::class, 'show']);
// ● GET - para obtener la información del armario de un usuario en concreto
Route::put('/armario/ver/{id}', [ArmarioController::class, 'showUser']);
// ● PUT - actualizar información de la prenda de ropa de un usuario en concreto
Route::put('/armario/{idUser}/actualizar/{idArmario}', [ArmarioController::class, 'update']);