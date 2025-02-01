<?php
// Iniciar sesión
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al inicio o a la página de login
header('Location: ../public/index.php');
exit;
