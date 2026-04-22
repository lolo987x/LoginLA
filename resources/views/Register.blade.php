<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="box register">

    <form method="POST" action="/register">
        @csrf

        <h2>Registrarse</h2>

        <div class="inputBox">
            <input type="text" name="name" required>
            <span>Nombre</span>
            <i></i>
        </div>

        <div class="inputBox">
            <input type="email" name="email" required>
            <span>Correo</span>
            <i></i>
        </div>

        <div class="inputBox">
            <input type="password" name="password" required>
            <span>Contraseña</span>
            <i></i>
        </div>

        <div class="inputBox">
            <input type="password" name="password_confirmation" required>
            <span>Confirmar Contraseña</span>
            <i></i>
        </div>

        <div class="links">
            <a href="/login">¿Ya tienes cuenta? Inicia sesion</a>
        </div>

        <input type="submit" value="Registrarse">

    </form>

</div>

</body>
</html>
