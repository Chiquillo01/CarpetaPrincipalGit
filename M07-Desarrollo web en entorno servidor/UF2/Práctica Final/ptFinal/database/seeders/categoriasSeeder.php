<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorias;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorias::create([
            'id' => '1',
            'nombre' => 'Cartas',
            'descripcion' => 'Esta es la primera de las categorias dedicada a ...',
        ]);

        Categorias::create([
            'id' => '2',
            'nombre' => 'Juegos',
            'descripcion' => 'Esta es la segunda de las categorias dedicada a ...',
        ]);

        Categorias::create([
            'id' => '3',
            'nombre' => 'Libros',
            'descripcion' => 'Esta es la tercera de las categorias dedicada a ...',
        ]);
    }
}
