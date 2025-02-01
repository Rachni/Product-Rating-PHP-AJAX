<?php
session_start();
require_once 'config/Database_connection.php';

// Verificar que el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Usuario no autenticado.']);
    exit;
}

$product_id = $_POST['product_id'];
$rating = $_POST['rating'];
$user_id = $_SESSION['user_id'];

try {
    $pdo = Database::getConnection();

    // Verificar si el usuario ya ha valorado este producto
    $query = "SELECT id FROM votos WHERE idPr = ? AND idUs = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$product_id, $user_id]);

    if ($stmt->rowCount() > 0) { // Si el usuario ya ha votado, actualiza la valoración

        $query = "UPDATE votos SET cantidad = ? WHERE idPr = ? AND idUs = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$rating, $product_id, $user_id]);
        
    } else { // Si el usuario no ha votado, inserta una nueva valoración

        $query = "INSERT INTO votos (cantidad, idPr, idUs) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$rating, $product_id, $user_id]);
    }

    // Obtener la nueva media de valoraciones y la cantidad de valoraciones para el producto
    $query = "SELECT AVG(cantidad) AS avg_rating, COUNT(id) AS ratings_count FROM votos WHERE idPr = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$product_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Asegurarnos de que 'avg_rating' sea un número válido. Si no es un número, lo asignamos como 0.
    $avg_rating = (float)$result['avg_rating']; // Convierte a float para evitar errores
    $ratings_count = (int)$result['ratings_count']; // Asegura que la cantidad de valoraciones sea un número entero

    // Si 'avg_rating' no es un número válido lo asigna como 0
    if ($avg_rating === 0) {
        $avg_rating = 0;
    }

    // Respuesta a frontend con nueva media y número de valoraciones
    echo json_encode([
        'success' => true,
        'new_avg_rating' => $avg_rating,  // float: media de valoraciones
        'new_ratings_count' => $ratings_count  //Num valoraciones
    ]);
} catch (PDOException $e) {
    error_log('Database Error: ' . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Error al procesar la solicitud.']);
}
