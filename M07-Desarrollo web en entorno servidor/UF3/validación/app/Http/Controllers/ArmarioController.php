<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armario;

class ArmarioController extends Controller
{

    // ● POST - insertar una nueva pieza de ropa para un usuario en concreto
    public function store(Request $request, $idUser)
    {
        try {
            $validados = $request->validate([
                'nombre' => 'required|string',
                'talla' => 'required|string',
                'color' => 'required|string',
            ]);

            $validados['idUser'] = $idUser;

            $armario = Armario::create($validados);

            return response()->json($armario, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al crear la pieza de ropa: ' . $e->getMessage()], 500);
        }
    }

    // ● DELETE - eliminar una pieza de ropa de un usuario en concreto
    public function destroy($idUser, $idArmario)
    {
        try {
            $armario = Armario::where('idUser', $idUser)->findOrFail($idArmario);
            $armario->delete();

            return response()->json($armario, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al eliminar la pieza de ropa: ' . $e->getMessage()], 500);
        }
    }

    // ● GET - obtener información de toda la tabla armario
    public function show()
    {
        $armario = Armario::all();
        return response()->json($armario, 200);
    }

    // ● GET - para obtener la información del armario de un usuario en concreto
    public function showUser($idUser)
    {
        try {
            $armario = Armario::where('idUser', $idUser)->get();
            $armario->delete();

            return response()->json($armario, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al mostrar el armario del usuario: ' . $e->getMessage()], 500);
        }
    }

    // ● PUT - actualizar información de la prenda de ropa de un usuario en concreto
    public function update(Request $request, $idUser, $idArmario)
    {
        try {
            $validados = $request->validate([
                'nombre' => 'required|string',
                'talla' => 'required|string',
                'color' => 'required|string',
            ]);

            $armario = Armario::where('id', $idUser)->findOrFail($idArmario);
            $armario->update($validados);

            return response()->json($armario, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al actualizar la prenda: ' . $idArmario . 'ERROR:' . $e->getMessage()], 500);
        }
    }
}
