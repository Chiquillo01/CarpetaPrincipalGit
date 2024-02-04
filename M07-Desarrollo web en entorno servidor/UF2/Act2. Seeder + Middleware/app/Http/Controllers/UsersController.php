<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    // Retorna la pagina para iniciar resión
    function login() {
        return view('pokemons/login');
    }

    function auth(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials['pokemons/IsAdmin'] = true;

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return to_route('pokemons/IsAdmin');
        } else {

            return to_route('pokemons/login')
                ->with('status', 'error');

        }
    }

    // Salir sesión
    function logout() {
        Auth::logout();

        return to_route('pokemons/index')
            ->with('status', 'Sesión finalizada.');
    }
}
