<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str
use Illuminate\Support\Facades\Hash; // <-- import it at the top

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Credenciales admin
         */
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'edgarchb01@gmail.com',
            'password' => Hash::make('123456Ab.'),
            'IsAdmin' => true
        ]);
    }
}
