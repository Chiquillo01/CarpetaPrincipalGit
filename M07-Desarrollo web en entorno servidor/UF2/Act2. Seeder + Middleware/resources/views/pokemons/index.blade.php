<!-- resources/views/pokemons/index.blade.php -->

@extends('layouts.app')

<div class="container">
    <h2>Listado de Pokémon</h2>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Tamaño</th>
                <th>Peso</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>

    <br><br><br>

    <div>
        <form method="GET" action="{{ route('login') }}">
            @csrf
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>

</div>