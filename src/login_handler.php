<?php
session_start();
require_once './config/Database_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if (empty($name) || empty($password)) {
        die('Please enter a name and password');
    }

    try {
        // DB connection
        $pdo = Database::getConnection();

        // Consulta SQL para buscar al usuario por el nombre
        $query = "SELECT usuario, name, pass FROM usuarios WHERE name = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name]);

        if ($stmt->rowCount() === 1) { //si hay usuario con ese nombre
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // password_verify porque la pass está hashed en DB.
            if (password_verify($password, $user['pass'])) {

                // Guarda variables en sesión para uso entre páginas
                $_SESSION['user_id'] = $user['usuario'];
                $_SESSION['username'] = $user['name'];

                header('Location: ../public/products.php');
                exit();
            } else {
                die('Invalid password');
            }
        } else {
            die('User not found');
        }
    } catch (PDOException $e) {
        error_log('Database Error: ' . $e->getMessage());
        die('Something went wrong. Please try again.');
    }
}
