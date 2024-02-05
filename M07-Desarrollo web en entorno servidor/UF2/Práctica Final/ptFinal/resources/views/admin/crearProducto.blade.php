<!-- resources/views/admin/crearProductoForm.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>

    <form method="POST" action="{{ route('admin.catalogo.crear') }}">
        @csrf

        <!-- Agrega aquí los campos necesarios para el producto -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br>

        <label for="unidades">Unidades:</label>
        <input type="number" id="unidades" name="unidades" required><br>

        <label for="precio_unitario">Precio Unitario:</label>
        <input type="number" step="0.01" id="precio_unitario" name="precio_unitario" required><br>

        <label for="categoria">Categoría:</label>
        <!-- Agrega aquí una lista desplegable con las categorías disponibles -->

        <button type="submit">Crear Producto</button>
    </form>
@endsection
