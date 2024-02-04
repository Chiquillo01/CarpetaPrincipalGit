<!DOCTYPE html>
<html>

<head>
    <title>Categorias</title>
</head>

<body>
    <h1>Categorias disponibles</h1>

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
    </table>
    <a href="{{ route('privada') }}"><button type="button">Atrás</button></a>

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