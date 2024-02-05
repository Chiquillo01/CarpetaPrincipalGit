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

    public function eliminarProducto($id)
    {
        // Buscar el producto por ID
        $producto = Catalogo::find($id);

        if (!$producto) {
            // Si el producto no existe, redirigir con un mensaje de error
            return redirect()->route('admin.catalogo')->with('error', 'El producto no existe.');
        }

        // Eliminar el producto
        $producto->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin.catalogo')->with('success', 'Producto eliminado exitosamente.');
    }

    // ----------------------------
    // ----------------------------
    // ----------------------------

    // CRUD para las categorias
    public function showCategorias()
    {
        // Lógica para obtener los productos del catálogo desde la base de datos
        $categorias = Categorias::all();

        // Retorna la vista con los datos
        return view('admin.categorias', compact('categorias'));
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

    public function eliminarCategoria($id)
    {
        // Buscar el producto por ID
        $categoria = Categorias::find($id);

        if (!$categoria) {
            // Si el producto no existe, redirigir con un mensaje de error
            return redirect()->route('admin.categorias')->with('error', 'La categoria no existe.');
        }

        // Eliminar el producto
        $categoria->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin.catalogo')->with('success', 'Categoria eliminado exitosamente.');
    }

    // ----------------------------
    // ----------------------------
    // ----------------------------

    // CRUD para los usuarios
    public function showUsuarios()
    {
        // Lógica para obtener los productos del catálogo desde la base de datos
        $users = User::all();

        // Retorna la vista con los datos
        return view('admin.usuarios', compact('users'));
    }

    public function crearUsuarioForm()
    {
        return view('admin.crearUsuarioForm');
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
        return redirect(route('admin.usuarios'))->with('success', 'Usuario creado exitosamente.');
    }

    public function eliminarUsuario($id)
    {
        // Buscar el producto por ID
        $usuario = User::find($id);

        if (!$usuario) {
            // Si el producto no existe, redirigir con un mensaje de error
            return redirect()->route('admin.usuarios')->with('error', 'El usuario no existe.');
        }

        // Eliminar el producto
        $usuario->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin.usuarios')->with('success', 'Usuario eliminado exitosamente.');
    }
}
