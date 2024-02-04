<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Categorias;
use App\Models\User;

class AdminController extends Controller
{
    // CRUD para los usuarios
    public function showCatalogo()
    {
        // Lógica para obtener los productos del catálogo desde la base de datos
        $catalogos = Catalogo::all();

        // Retorna la vista con los datos
        return view('admin.catalogo', compact('catalogos'));
    }

    public function crearProductoForm()
    {
        return view('admin.crearProducto');
    }

    public function crearProducto(Request $request)
    {
        // Lógica para validar y guardar el nuevo producto en la base de datos
        $nuevoProducto = new Catalogo([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'unidades' => $request->input('unidades'),
            'precio_unitario' => $request->input('precio_unitario'),
            'categoria' => $request->input('categoria'),
        ]);

        $nuevoProducto->save();

        // Redirige de nuevo a la vista del catálogo
        return redirect(route('admin.catalogo'))->with('success', 'Producto creado exitosamente.');
    }
    

    // CRUD para las categorias
    public function showCategorias()
    {
        // Lógica para obtener los productos del catálogo desde la base de datos
        $categorias = Categorias::all();

        // Retorna la vista con los datos
        return view('admin.catalogo', compact('categorias'));
    }

    // CRUD para los usuarios
    public function showUser()
    {
        // Lógica para obtener los productos del catálogo desde la base de datos
        $users = User::all();

        // Retorna la vista con los datos
        return view('admin.catalogo', compact('users'));
    }
}
