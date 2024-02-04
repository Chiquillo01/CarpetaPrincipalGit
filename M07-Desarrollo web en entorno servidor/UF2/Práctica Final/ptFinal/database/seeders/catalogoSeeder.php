<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class catalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cat = ['Cartas', 'Juegos', 'Libros'];

        //inserta 10 nuevas entradas a la bd
        for ($i = 0; $i <= 9; $i++) {
            DB::table('catalogos')->insert([
                'id' => '0',
                'nombre' => Str::random(8),
                'descripcion' => Str::random(40),
                'unidades' => rand(1, 89),
                'precio_unitario' => rand(5, 65),
                'categoria' => $cat[array_rand($cat)],
            ]);
        }
    }
}
