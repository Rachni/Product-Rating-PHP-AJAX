<?php
session_start(); // Inicia la sesión

// Include database connection
require_once './config/Database_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic form validation
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['flash_error'] = "Por favor, completa todos los campos (nombre, email y contraseña).";
        header('Location: ./../public/register.php'); // Redirige de vuelta al formulario
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Get DB connection
        $pdo = Database::getConnection();

        // Check if the email already exists
        $query = "SELECT usuario FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $_SESSION['flash_error'] = "El correo electrónico ya está registrado.";
            header('Location: ./../public/register.php'); // Redirige de vuelta al formulario
            exit();
        } else {
            // Insert new user into the 'usuarios' table
            $query = "INSERT INTO usuarios (name, email, pass) VALUES (:name, :email, :password)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);

            if ($stmt->execute()) {

                header('Location: ./../public/index.php'); // Redirige a la página de inicio de sesión
                exit();
            } else {
                // Capture detailed error if insert fails
                $errorInfo = $stmt->errorInfo();
                $_SESSION['flash_error'] = "Error al registrar el usuario: " . $errorInfo[2];
                error_log("SQL error during insert: " . $errorInfo[2]); // Log the error
                header('Location: ./../public/register.php'); // Redirige de vuelta al formulario
                exit();
            }
        }
    } catch (PDOException $e) {
        // Log detailed error message and display a generic message to the user
        error_log('Database Error: ' . $e->getMessage());
        $_SESSION['flash_error'] = 'Hubo un error en la base de datos. Inténtalo nuevamente más tarde.';
        header('Location: ./../public/register.php'); // Redirige de vuelta al formulario
        exit();
    }
} else {
    $_SESSION['flash_error'] = 'Método de solicitud no válido. Por favor, envía el formulario correctamente.';
    header('Location: ./../public/register.php'); // Redirige de vuelta al formulario
    exit();
}
