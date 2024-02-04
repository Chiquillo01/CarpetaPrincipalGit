<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="{{route('iniciar-sesion')}}">
        @csrf
        <label for="emailInput">Email:</label><br>
        <input type="email" id="emailInput" name="email" autocomplete="disable"><br><br>

        <label for="passwordInput">Contraseña:</label><br>
        <input type="password" id="passwordInput" name="password" autocomplete="disable"><br><br>

        <!-- <label for="rememberCheck">Manten sesión iniciada</label><br>
        <input type="checkbox" id="rememberCheck" name="remember"><br> -->

        <p>¿No tienes cuenta?<a href="{{route('registro')}}">Registrate</a></p>

        <button type="submit">Acceder</button>

        <br><br><br>
    </form>

    <!-- Mostrar mensajes al usuario -->
    @if(Session::has('success'))
    <div id="popup" class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    <script>
        // Agregar script para mostrar el popup
        document.addEventListener('DOMContentLoaded', function() {
            // Muestra el popup
            document.getElementById('popup').style.display = 'block';

            // Puedes agregar un código adicional para cerrar el popup después de un tiempo específico si es necesario
            setTimeout(function() {
                document.getElementById('popup').style.display = 'none';
            }, 5000); // Cierra el popup después de 5 segundos (ajusta según tus necesidades)
        });
    </script>
    @endif

    @if(Session::has('error'))
    <div style="color: red;">
        {{ Session::get('error') }}
    </div>
    @endif
    <!-- ------------------ -->
</body>

</html>