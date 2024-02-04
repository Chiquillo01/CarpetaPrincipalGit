<!DOCTYPE html>
<html>

<head>
    <title>Editar Nick</title>
</head>

<body>
    <h1>Editar Nick</h1>

    <!-- Formulario para editar el nick -->
    <form action="{{ route('updateNick') }}" method="post">
        @csrf
        <label for="new_nick">Nuevo Nick:</label>
        <input type="text" name="new_nick" value="{{ $usuario->nick }}" required>
        <button type="submit">Guardar</button>
    </form>

    <br>

    <!-- Volver al perfil sin guardar cambios -->
    <a href="{{ route('profile') }}"><button type="button">Cancelar</button></a>

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