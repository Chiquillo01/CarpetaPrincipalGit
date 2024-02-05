<!-- resources/views/admin/crearCategoriaForm.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Categoría</h1>

    <form method="POST" action="{{ route('admin.categorias.crear') }}">
        @csrf

        <!-- Agrega aquí los campos necesarios para la categoría -->
        <label for="nombre">Nombre de la Categoría:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br>

        <button type="submit">Crear Categoría</button>
    </form>
@endsection
