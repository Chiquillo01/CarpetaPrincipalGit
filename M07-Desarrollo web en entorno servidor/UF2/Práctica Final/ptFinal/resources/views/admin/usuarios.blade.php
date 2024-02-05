<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>

<body>
    <h1>Lista de usuarios</h1>

    <table>
        <thead>
            <th>Nick</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Fecha de Nacimiento</th>
            <th>Rol</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->nick }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->apellido }}</td>
                <td>{{ $user->dni }}</td>
                <td>{{ $user->fecha }}</td>
                <td>{{ $user->rol ? 'Admin' : 'Usuario' }}</td>
                <td>
                    <!-- Botón para eliminar producto -->
                    <form method="post" action="{{ route('admin.categorias.eliminar', $user->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

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