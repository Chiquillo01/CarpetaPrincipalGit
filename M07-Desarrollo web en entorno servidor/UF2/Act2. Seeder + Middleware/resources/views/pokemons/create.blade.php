<!-- resources/views/pokemons/create.blade.php -->

@extends('layouts.app')


<a href="{{ route('pokemons.create') }}" class="btn btn-success">
    <h2>Agregar Pokémon</h2>
</a>

<form action="{{ route('pokemons.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="type">Tipo:</label>
        <select name="type" class="form-control" required>
            <option value="Acero">Acero</option>
            <option value="Agua">Agua</option>
            <option value="Bicho">Bicho</option>
            <option value="Dragón">Dragón</option>
            <option value="Eléctrico">Eléctrico</option>
            <option value="Fantasma">Fantasma</option>
            <option value="Fuego">Fuego</option>
            <option value="Hada">Hada</option>
            <option value="Hielo">Hielo</option>
            <option value="Lucha">Lucha</option>
            <option value="Normal">Normal</option>
            <option value="Planta">Planta</option>
            <option value="Psyquico">Psyquico</option>
            <option value="Roca">Roca</option>
            <option value="Siniestro">Siniestro</option>
            <option value="Tierra">Tierra</option>
            <option value="Veneno">Veneno</option>
            <option value="Volador">Volador</option>
            <option value="Jewel">Jewel</option>
        </select>
    </div>

    <div class="form-group">
        <label for="size">Tamaño:</label>
        <select name="size" class="form-control" required>
            <option value="pequeño">Pequeño</option>
            <option value="mediano">Mediano</option>
            <option value="grande">Grande</option>
        </select>
    </div>

    <div class="form-group">
        <label for="weight">Peso:</label>
        <input type="number" name="weight" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


<div class="container">
    <form method="GET" action="{{ route('pokemons.show') }}">
        <h2>Listado de Pokémon</h2>
        <input type="submit" value="Mostrar pokemons">
    </form>


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

    <div>
        <form method="GET" action="{{ route('login') }}">
            @csrf
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>

</div>