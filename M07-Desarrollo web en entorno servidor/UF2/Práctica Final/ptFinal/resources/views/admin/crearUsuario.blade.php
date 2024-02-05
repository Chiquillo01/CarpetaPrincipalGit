<!-- resources/views/admin/crearUsuarioForm.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Usuario</h1>

    <form method="POST" action="{{ route('admin.usuarios.crear') }}">
        @csrf

        <!-- Agrega aquí los campos necesarios para el usuario -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Crear Usuario</button>
    </form>
@endsection
