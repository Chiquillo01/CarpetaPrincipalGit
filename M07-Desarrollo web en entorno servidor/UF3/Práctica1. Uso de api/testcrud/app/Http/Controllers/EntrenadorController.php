<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrenador;

class EntrenadorController extends Controller
{
    /* PÁGINA INICIAL */
    public function index()
    {
        $entrenadores = Entrenador::all();
        return view('entrenadores.index', compact('entrenadores'));
    }

    /* CREACIÓN */
    public function create()
    {
        return view('entrenadores.create');
    }

    /* GUARDAR */
    public function store(Request $request)
    {
        //añade aquí la funcionalidad
    }

    /* EDITAR */
    public function edit(Entrenador $entrenador)
    {
        return view('entrenadores.edit', compact('entrenador'));
    }

    /* ACTUALIZAR */
    public function update(Request $request, Entrenador $entrenador)
    {
        //añade aquí la funcionalidad

        return redirect()->route('entrenadores.index');
    }

    /*ELIMINAR*/
    public function destroy(Entrenador $entrenador)
    {
        //añade aquí la funcionalidad

        return redirect()->route('entrenador.index');
    }

}
