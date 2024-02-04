<!-- resources/views/pokemons/index.blade.php -->

@extends('layouts.app')

@section('content')
<h2>Listado de Pokémon</h2>

<a href="{{ route('pokemons.create') }}" class="btn btn-success">Agregar Pokémon</a>

<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Tamaño</th>
            <th>Peso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pokemons as $pokemon)
        <tr>
            <td>{{ $pokemon->id }}</td>
            <td>{{ $pokemon->name }}</td>
            <td>{{ $pokemon->type }}</td>
            <td>{{ $pokemon->size }}</td>
            <td>{{ $pokemon->weight }}</td>
            <td>
                <a href="{{ route('pokemons.edit', $pokemon) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('pokemons.destroy', $pokemon) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection