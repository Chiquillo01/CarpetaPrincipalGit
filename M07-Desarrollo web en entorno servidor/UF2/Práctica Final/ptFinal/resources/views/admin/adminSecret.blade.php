<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página del usuario</title>
</head>

<body>

    <p>Estas en la página principal del usuario ADMINISTRADOR</p>
    <p>¿Que desea hacer?</p>
    <br>

    <a href="{{ route('admin.catalogo') }}">
        <button type="button">Relacionado con Catálogo de productos</button>
    </a><br>
    <a href="{{ route('admin.categorias') }}">
        <button type="button">Relacionado con Categorías</button>
    </a><br>
    <a href="{{ route('admin.usuarios') }}">
        <button type="button">Relacionado con Usuarios</button>
    </a><br>

    <a href="{{route('logout')}}"><button type="button" onclick="confirmLogout()">Salir</button></a>


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

<script>
    function confirmLogout() {
        // Mostrar cuadro de diálogo de confirmación
        var confirmLogout = confirm("¿Estás seguro de que quieres salir?");
        
        // Si el usuario confirma, redirigir a la página de cierre de sesión
        if (confirmLogout) {
            window.location.href = "{{ route('logout') }}";
        }
    }
</script>