<?php
session_start(); // Inicia la sesión

// Verifica si hay mensajes flash de error o éxito
$flash_error = isset($_SESSION['flash_error']) ? $_SESSION['flash_error'] : null;

// Elimina los mensajes flash después de mostrarlos
unset($_SESSION['flash_error']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Video Game Rating</title>
    <link href="./css/index-style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Te damos la bienvenida a Video Game Rating App!</h1>
        <p>Regístrate para empezar a valorar tus videojuegos favoritos.</p>

        <!-- Mostrar mensajes de error -->
        <?php if ($flash_error): ?>
            <div class="flash-message error">
                <?php echo htmlspecialchars($flash_error); ?>
            </div>
        <?php endif; ?>

        <h2>Registro</h2>
        <form action="../src/register_handler.php" method="POST">
            <label for="name">Nombre de usuario:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="index.php">Inicia sesión</a></p>
    </div>
</body>

</html>
