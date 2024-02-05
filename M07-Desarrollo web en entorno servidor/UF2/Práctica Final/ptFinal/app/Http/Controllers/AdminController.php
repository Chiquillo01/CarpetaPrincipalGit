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
        return view('admin.catalogo');
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

    public function crearCategoriaForm()
    {
        return view('admin.crearCategoria');
    }

    public function crearCategoria(Request $request)
    {
        // Lógica para validar y guardar el nuevo catalogo en la base de datos
        $nuevoCatalogo = new Catalogo([
            'id_categoria' => $request->input('id_categoria'),
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion')
        ]);

        $nuevoCatalogo->save();

        // Redirige de nuevo a la vista del catálogo
        return redirect(route('admin.catalogo'))->with('success', 'Categoria exitosamente.');
    }

    // CRUD para los usuarios
    public function showUser()
    {
        // Lógica para obtener los productos del catálogo desde la base de datos
        $users = User::all();

        // Retorna la vista con los datos
        return view('admin.usuarios', compact('users'));
    }

    public function crearUserForm()
    {
        return view('admin.usuarios.crear');
    }

    public function crearUsuario(Request $request)
    {
        // Lógica para validar y guardar el nuevo producto en la base de datos
        $nuevoProducto = new Catalogo([
            'nick' => $request->input('nick'),
            'email' => $request->input('email'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'dni' => $request->input('dni'),
            'fecha' => $request->input('fecha'),
            'password' => $request->input('password'),
            'rol' => $request->input('rol')
        ]);

        $nuevoProducto->save();

        // Redirige de nuevo a la vista del catálogo
        return redirect(route('admin.catalogo'))->with('success', 'Producto creado exitosamente.');
    }
}
