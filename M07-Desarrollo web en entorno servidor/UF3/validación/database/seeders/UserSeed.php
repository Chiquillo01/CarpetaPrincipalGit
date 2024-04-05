<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos usuarios regulares
        for ($i = 1; $i < 5; $i++) {
            User::create([
                'name' => 'Usuario' . $i,
                'email' => 'usuario' . $i . '@test.com',
                'password' => '12345',
                'role' => 'user',
            ]);
        }
    }
}
