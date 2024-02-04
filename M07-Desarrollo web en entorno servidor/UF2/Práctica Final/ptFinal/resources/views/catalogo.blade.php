<!DOCTYPE html>
<html>

<head>
    <title>Catálogo</title>
</head>

<body>
    <h1>Catálogo de Productos</h1>

    <!-- Agregamos un formulario para enviar la solicitud de ordenamiento -->
    <form action="{{ route('mostrarCatalogo') }}" method="get">
        <button type="submit" name="sort" value="precio_asc">Ordenar por Precio (Menor a Mayor)</button>
    </form>

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
                <td>
                    <!-- Agregamos un formulario y un botón de submit para agregar al carrito -->
                    <form action="{{ route('carrito.agregar', ['productoId' => $catalogo->id]) }}" method="post">
                        @csrf
                        <button type="submit">Agregar al Carrito</button>
                    </form>
                </td>
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