<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <label for="nickInput">Nick:</label><br>
        <input type="text" id="nickInput" name="nick" autocomplete="disable"><br><br>

        <label for="emailInput">Email:</label><br>
        <input type="email" id="emailInput" name="email" autocomplete="disable"><br><br>

        <label for="nombreInput">Nombre:</label><br>
        <input type="text" id="nombreInput" name="nombre" autocomplete="disable"><br><br>

        <label for="apellidoInput">Apellido:</label><br>
        <input type="text" id="apellidoInput" name="apellido"><br><br>

        <label for="dniInput">Dni:</label><br>
        <input type="text" id="dniInput" name="dni" autocomplete="disable"><br><br>

        <label for="fechaInput">Fecha de nacimiento:</label><br>
        <input type="date" id="fechaInput" name="fecha" autocomplete="disable"><br><br>

        <label for="passwordInput">Contraseña:</label><br>
        <input type="password" id="passwordInput" name="password" autocomplete="disable"><br><br>

        <label for="rolInput">Admin:</label>
        <input type="checkbox" id="rolInput" name="rol" autocomplete="disable"><br><br>

        <button type="submit">Registrarse</button>


    </form>

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