<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class pokemon extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //inserta 10 nuevas entradas a la bd
        for ($i = 0; $i <= 9; $i++) {
            DB::table('pokemon')->insert([
                'id' => '0',
                'name' => Str::random(8),
                'type' => Str::random(6),
                'size' => $this->getRandomSize(),
                'weight' => rand(0, 99)
            ]);
        }
    }

    /**
     * Retorna un tamaño aleatorio entre 'grande', 'mediano' y 'pequeño'.
     */
    private function getRandomSize(): string
    {
        $sizes = ['grande', 'mediano', 'pequeño'];
        return $sizes[array_rand($sizes)];
    }
}
