<!DOCTYPE html>
<html>

<head>
    <title>Perfil de Usuario</title>
</head>

<body>
    <h1>Perfil de Usuario</h1>
    <table style="margin: 20px;">
        <tr>
            <th>Nick</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Fecha de Nacimiento</th>
            <th>Rol</th>
        </tr>
        <tr>
            <td>{{ $usuario->nick }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->dni }}</td>
            <td>{{ $usuario->fecha }}</td>
            <td>{{ $usuario->rol ? 'Admin' : 'Usuario' }}</td>
        </tr>
        <tr>
            <th><a href="{{ route('editNick') }}"><button type="button">Modificar Nick</button></a></th>
            <th><a href="{{ route('editEmail') }}"><button type="button">Modificar Email</button></a></th>
        </tr>
    </table>
    <br><br>
    <a href="{{ route('catalogo') }}"><button type="button">Catálogo de productos</button></a><br>
    <a href="{{ route('categorias') }}"><button type="button">Categorías</button></a><br>
    <a href="{{ route('profile') }}"><button type="button">Perfil</button></a><br>
    <a href="{{ route('privada') }}"><button type="button">Atrás</button></a>


</body>

</html>