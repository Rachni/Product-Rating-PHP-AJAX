<?php

require_once 'config/Database_connection.php';

// Inicia sesión
session_start();
$user_id = $_SESSION['user_id'];
// consigue el producto y el rating para le usuario que ha iniciado sesión
$query = "SELECT idPr, cantidad
FROM votos
WHERE idUs = :user_id";

$pdo = Database::getConnection();
$stmt = $pdo->prepare($query);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();

$ratings = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Mapeo entre id de producto y cantidad de estrellas que el usuario ha dado anteriormente
$user_ratings_map = [];
foreach ($ratings as $rating) {
    $user_ratings_map[$rating['idPr']] = $rating['cantidad'];
}