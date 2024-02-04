<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si el usuario actual es un administrador (rol = 1)
        if (auth()->user() && auth()->user()->rol == 1) {
            return $next($request);
        }

        // Redirigir o realizar acciones específicas si el usuario no es un administrador
        return redirect('/')->with('error', 'Acceso no autorizado para administradores.');
    }
}
