<?php

namespace App\Http\Controllers;

// Importaciones
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    // Función para registarar los usuarios
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

    // Función para logear al usuario tanto como admin como normal
    public function login(Request $request)
    {

        // Validación  de las credenciales
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Verificar el rol del usuario
            if (Auth::user()->rol == 1) {
                // Usuario Administrador
                return redirect(route('admin.privada'))->with('success', 'Acceso exitoso.');
            } else {
                // Usuario Normal
                return redirect(route('privada'))->with('success', 'Acceso exitoso.');
            }
        } else {
            return redirect('login')->with('error', 'Usuario o contraseña incorrectos.');
        }
    }

    // Función para salir de la sesión
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

       return redirect('/login')->with('success', 'Has cerrado sesión correctamente.');
    }

    // Función solo para el usuario, para mostrar el perfil del usuario
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

    // Función solo para el usuario, modificar el nick
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

    // Función solo para el usuario, editar el correo electronico
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
