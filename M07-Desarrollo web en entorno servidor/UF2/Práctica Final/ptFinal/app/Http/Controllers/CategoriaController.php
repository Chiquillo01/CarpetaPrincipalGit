<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriaController extends Controller
{
    public function mostrarCategorias()
    {
        // Obtén tus categorías desde el modelo o de alguna otra fuente
        $categorias = Categorias::all(); // Ajusta esto según tu lógica de obtención de categorías

        // Pasa las categorías a la vista
        return view('categoria', ['categorias' => $categorias]);
    }
}
