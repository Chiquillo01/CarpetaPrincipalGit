<!-- resources/views/pokedex/edit.blade.php -->


<h2>Editar Pokemon</h2>

<form action="{{ route('pokemons.update', $pokemon) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" class="form-control" value="{{ $pokemon->name }}" required>
    </div>

    <div class="form-group">
        <label for="type">Tipo:</label>
        <select name="type" class="form-control" required>
            <option value="Acero" {{ $pokemon->type == 'Acero' ? 'selected' : '' }}>Acero</option>
            <option value="Agua" {{ $pokemon->type == 'Agua' ? 'selected' : '' }}>Agua</option>
            <option value="Bicho" {{ $pokemon->type == 'Bicho' ? 'selected' : '' }}>Bicho</option>
            <option value="Dragón" {{ $pokemon->type == 'Dragón' ? 'selected' : '' }}>Dragón</option>
            <option value="Eléctrico" {{ $pokemon->type == 'Eléctrico' ? 'selected' : '' }}>Eléctrico</option>
            <option value="Fantasma" {{ $pokemon->type == 'Fantasma' ? 'selected' : '' }}>Fantasma</option>
            <option value="Fuego" {{ $pokemon->type == 'Fuego' ? 'selected' : '' }}>Fuego</option>
            <option value="Hada" {{ $pokemon->type == 'Hada' ? 'selected' : '' }}>Hada</option>
            <option value="Hielo" {{ $pokemon->type == 'Hielo' ? 'selected' : '' }}>Hielo</option>
            <option value="Lucha" {{ $pokemon->type == 'Lucha' ? 'selected' : '' }}>Lucha</option>
            <option value="Normal" {{ $pokemon->type == 'Normal' ? 'selected' : '' }}>Normal</option>
            <option value="Planta" {{ $pokemon->type == 'Planta' ? 'selected' : '' }}>Planta</option>
            <option value="Psyquico" {{ $pokemon->type == 'Psyquico' ? 'selected' : '' }}>Psyquico</option>
            <option value="Roca" {{ $pokemon->type == 'Roca' ? 'selected' : '' }}>Roca</option>
            <option value="Siniestro" {{ $pokemon->type == 'Siniestro' ? 'selected' : '' }}>Siniestro</option>
            <option value="Tierra" {{ $pokemon->type == 'Tierra' ? 'selected' : '' }}>Tierra</option>
            <option value="Veneno" {{ $pokemon->type == 'Veneno' ? 'selected' : '' }}>Veneno</option>
            <option value="Volador" {{ $pokemon->type == 'Volador' ? 'selected' : '' }}>Volador</option>
            <option value="Jewel" {{ $pokemon->type == 'Jewel' ? 'selected' : '' }}>Jewel</option>
        </select>
    </div>

    <div class="form-group">
        <label for="size">Tamaño:</label>
        <select name="size" class="form-control" required>
            <option value="grande" {{ $pokemon->size == 'grande' ? 'selected' : '' }}>Grande</option>
            <option value="mediano" {{ $pokemon->size == 'mediano' ? 'selected' : '' }}>Mediano</option>
            <option value="pequeño" {{ $pokemon->size == 'pequeño' ? 'selected' : '' }}>Pequeño</option>
        </select>
    </div>

    <div class="form-group">
        <label for="weight">Peso:</label>
        <input type="number" name="weight" class="form-control" value="{{ $pokemon->weight }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>
