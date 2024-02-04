<!-- resources/views/pokemons/create.blade.php -->

@extends('layouts.app')

@section('content')
<h2>Agregar Pokémon</h2>

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
@endsection