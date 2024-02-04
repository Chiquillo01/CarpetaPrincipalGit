<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Date;

class usersSeeder extends Seeder
{
    public function run()
    {
        //inserta 10 tareas
        for($i =0; $i<=3; $i++)
        {
            DB::table('users')->insert([
                'id' => '0',
                'nick' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'nombre' => Str::random(8),
                'apellido' => Str::random(12),
                'dni' => '47983846G',
                'fecha' => date('Y-m-d H:m:s'),
                'password' => Str::random(6),
                'rol' => '0',
            ]);
        }
    }
}