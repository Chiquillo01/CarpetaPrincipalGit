
<form method="POST" action="{{ route('auth') }}">
    @csrf
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    
    <input type="submit" value="Iniciar sesión">
</form>