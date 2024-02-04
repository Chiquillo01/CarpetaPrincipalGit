<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function register(Request $request)
    {
        $user = new User();

        if ($request->rol) {
            $rolStatus = true;
        } else {
            $rolStatus = false;
        }

        $user->nick = $request->nick;
        $user->email = $request->email;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->dni = $request->dni;
        $user->fecha = $request->fecha;
        $user->password = Hash::make($request->password);
        $user->rol = $rolStatus;

        $user->save();

        Auth::login($user);

        // Después de registrar al usuario, puedes almacenar un mensaje en la sesión
        Session::flash('success', '¡Usuario registrado correctamente!');

        return redirect(route('login'));
    }

    public function login(Request $request)
    {

        // Validación 
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('privada'))->with('success', 'Acceso exitoso.');
        } else {
            return redirect('login')->with('error', 'Usuario o contraseña incorrectos.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

    public function mostrarPerfil()
    {
        $usuario = Auth::user();

        return view('perfil', ['usuario' => $usuario]);
    }
    // EDITAR EL NICK
    public function editNick()
    {
        $usuario = auth()->user();

        return view('edit-nick', compact('usuario'));
    }

    public function updateNick(Request $request)
    {
        $user = auth()->user();

        // Validación básica
        $this->validate($request, [
            'new_nick' => 'required|unique:users,nick',
        ]);

        // Actualizar el nick del usuario
        $user->nick = $request->input('new_nick');
        $user->save();

        return redirect()->route('profile')->with('success', 'Nick actualizado correctamente.');
    }

    // EDITAR EL EMAIL
    public function editEmail()
    {
        $usuario = auth()->user();

        return view('edit-email', compact('usuario'));
    }

    public function updateEmail(Request $request)
    {
        $user = auth()->user();

        // Validación básica
        $this->validate($request, [
            'new_email' => 'required|unique:users,email',
        ]);

        // Actualizar el nick del usuario
        $user->email = $request->input('new_email');
        $user->save();

        return redirect()->route('profile')->with('success', 'Email actualizado correctamente.');
    }
}
