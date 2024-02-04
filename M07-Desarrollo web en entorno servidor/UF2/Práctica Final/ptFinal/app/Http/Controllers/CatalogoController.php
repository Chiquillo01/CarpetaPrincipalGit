<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function mostrarCatalogo(Request $request)
    {
        // Obtener la opción de ordenamiento desde la solicitud
        $sortOption = $request->get('sort');

        // Establecer la columna y la dirección de ordenamiento predeterminadas
        $orderByColumn = 'id';
        $orderByDirection = 'asc';

        // Si la opción de ordenamiento es 'precio_asc', ordenar por precio de menor a mayor
        if ($sortOption == 'precio_asc') {
            $orderByColumn = 'precio_unitario';
            $orderByDirection = 'asc';
        }

        // Obtener los productos ordenados según la opción seleccionada
        $catalogos = Catalogo::orderBy($orderByColumn, $orderByDirection)->get();

        return view('catalogo', compact('catalogos'));
    }
}
