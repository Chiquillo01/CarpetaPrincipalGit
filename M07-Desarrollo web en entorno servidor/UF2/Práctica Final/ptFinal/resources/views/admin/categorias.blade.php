<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>

<body>
    <h1>Lista de categorías</h1>

    <table>
        <thead>
            <tr>
                <th>ID Categorias</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
            </tr>
            @endforeach
        </tbody>

        <a href="{{ route('admin.privada') }}"><button type="button">Atrás</button></a>

        <!-- Mostrar mensajes al usuario -->
        @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
        @endif
        <!-- ------------------ -->
</body>

</html>