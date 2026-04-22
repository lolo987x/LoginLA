    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesion</title>

        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>

    <div class="box">

        <form method="POST" action="/login">
            @csrf

            <h2>Iniciar Sesion</h2>

            <div class="inputBox">
                <input type="text" name="email" required>
                <span>Usuario</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="password" required>
                <span>Contraseña</span>
                <i></i>
            </div>

            <div class="links">
                <a href="/register">Registrarse</a>
            </div>

            <input type="submit" value="Ingresar">
            <div class="google-login">
                <a href="/auth/google" class="google-btn">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google">
                    Iniciar sesion con Google
                </a>
            </div>

        </form>

    </div>

    </body>
    </html>
