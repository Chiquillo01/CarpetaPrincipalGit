<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página del usuario</title>
</head>

<body>

    <p>Estas en la página principal del usuario</p>
    <br><br>
    vamos de toda la vida el Menu
    <br><br>

    <a href="{{ route('catalogo') }}"><button type="button">Catálogo de productos</button></a><br>
    <a href="{{ route('categorias') }}"><button type="button">Categorías</button></a><br>
    <a href="{{ route('profile') }}"><button type="button">Perfil</button></a><br>
    <a href="{{ route('carrito.mostrar') }}"><button type="button">Ver Carrito</button></a><br>
    <a href="{{route('logout')}}"><button type="button">Salir</button></a>


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