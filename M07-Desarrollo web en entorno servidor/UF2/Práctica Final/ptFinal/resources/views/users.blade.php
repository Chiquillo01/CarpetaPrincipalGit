<form method="POST">
    @csrf
    <label for="nick">Nick:</label><br>
    <input type="text" id="nick" name="nick"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>

    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br><br>

    <label for="apellido">Apellido:</label><br>
    <input type="text" id="apellido" name="apellido"><br><br>

    <label for="dni">Dni:</label><br>
    <input type="text" id="dni" name="dni"><br><br>

    <label for="fecha">Fecha de nacimiento:</label><br>
    <input type="date" id="fecha" name="fecha"><br><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password"><br><br>
    
    <input type="submit" value="Iniciar sesión">
</form>