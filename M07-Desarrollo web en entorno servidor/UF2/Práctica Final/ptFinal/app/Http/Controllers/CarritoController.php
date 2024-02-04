<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importar modelos necesarios
use App\Models\Carrito;
use App\Models\Catalogo;

class CarritoController extends Controller
{
    public function mostrarCarrito()
    {
        $carritoItems = Carrito::all();
        return view('carrito.mostrar', ['carritoItems' => $carritoItems]);
    }

    public function agregarAlCarrito(Request $request, $productoId)
    {
        // Obtén el producto y verifica el stock
        $producto = Catalogo::find($productoId);
        if (!$producto || $producto->unidades < 1) {
            // Producto no encontrado o sin stock
            return redirect()->route('catalogo')->with('error', 'El producto no está en stock.');
        }
        dd('Producto: lo ha echo', $producto->precio_unitario);

        // Agrega el producto al carrito
        Carrito::create([
            'id' => '0',
            'producto' => $producto->nombre,
            'cantidad' => 1,
            'precio_producto' => $producto->precio_unitario,
            'total' => $producto->precio_unitario
        ]);

        return redirect()->route('catalogo')->with('success', 'Producto agregado al carrito exitosamente.');
    }

    public function eliminarDelCarrito($carritoId)
    {
        // Busca el producto en el carrito por su ID
        $item = Carrito::find($carritoId);

        if ($item) {

            // Incrementa el stock del producto
            $producto = Catalogo::where('nombre', $item->producto)->first();
            $producto->increment('unidades', $item->cantidad);

            // Elimina el producto del carrito
            $item->delete();

            return redirect()->route('carrito.mostrar')->with('success', 'Producto eliminado del carrito exitosamente.');
        }

        return redirect()->route('carrito.mostrar')->with('error', 'Error al eliminar el producto del carrito.');
    }
}
