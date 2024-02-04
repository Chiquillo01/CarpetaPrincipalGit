<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
</head>

<body>
    <h1>Catálogo de Productos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Unidades</th>
                <th>Precio Unitario</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @foreach($catalogos as $catalogo)
            <tr>
                <td>{{ $catalogo->id }}</td>
                <td>{{ $catalogo->nombre }}</td>
                <td>{{ $catalogo->descripcion }}</td>
                <td>{{ $catalogo->unidades }}</td>
                <td>{{ $catalogo->precio_unitario }}</td>
                <td>{{ $catalogo->categoria }}</td>
            </tr>
            @endforeach
        </tbody>


    </table>
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