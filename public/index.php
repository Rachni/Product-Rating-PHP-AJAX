<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Video Game Rating</title>
    <link href="./css/index-style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Te damos la bienvenida a Video Game Rating App!</h1>
        <p>Por favor, inicia sesión para empezar a valorar tus juegos favoritos.</p>

        <h2>Iniciar sesión</h2>
        <form action="../src/login_handler.php" method="POST">
            <label for="name">Nombre de usuario:</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar sesión</button>
        </form>
        <p>¿No tienes cuenta? <a href="./register.php">Regístrate</a></p>
    </div>

</body>