<!DOCTYPE html>
<html>

<head>
    <title>Editar Email</title>
</head>

<body>
    <h1>Editar Email</h1>

    <!-- Formulario para editar el nick -->
    <form action="{{ route('updateEmail') }}" method="post">
        @csrf
        <label for="new_email">Nuevo Email:</label>
        <input type="text" name="new_email" value="{{ $usuario->email }}" required>
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