<?php

namespace Database\Seeders;
use App\Models\Carrito;
use App\Models\Catalogo;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Obtener algunos productos del catálogo
       $productos = Catalogo::take(5)->get();

       foreach ($productos as $producto) {
           // Agregar productos al carrito
           Carrito::create([
               'producto' => $producto->nombre,
               'cantidad' => rand(1, 5),  // Puedes ajustar la cantidad según tus necesidades
               'precio_producto' => $producto->precio_unitario,
               'total' => $producto->precio_unitario * rand(1, 5),
           ]);
       }
    }
}
