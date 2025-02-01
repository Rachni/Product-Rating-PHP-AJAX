<?php
require_once '../src/previous_rating_handler.php';

// Verifica si la sesión está iniciada
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// DB
require_once '../src/config/Database_connection.php';

// DB conexión
try {
    $pdo = Database::getConnection();

    // Obtiene * de la vista
    $query = "SELECT * FROM producto_ratings";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    // Obtener todos los productos
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$productos) {
        throw new Exception('No se encontraron productos en la base de datos.');
    }
} catch (PDOException $e) {
    error_log('Database Error: ' . $e->getMessage());
    die('No se pudo obtener la información de los productos.');
} catch (Exception $e) {
    die($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Game Rating App - Productos</title>
    <link rel="stylesheet" href="./css/products-style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/rating.js" defer></script>
</head>

<body>
    <header>
        <h1>Video Game Rating App</h1>
        <!-- Muestra el usuario loggeado -->
        <p>Valoraciones de <?php echo $_SESSION['username']; ?></p>
        <a href="../src/logout.php">Cerrar sesión</a>
    </header>
    <div class="container">
        <h1>Videojuegos</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Desarrollador</th>
                        <th>Media</th>
                        <th>Valoraciones</th>
                        <th>Tu Valoración</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($productos): ?>
                        <?php foreach ($productos as $producto): ?>
                            <tr id="producto-<?php echo $producto['product_id']; ?>">

                                <td data-label="Nombre"><?php echo htmlspecialchars($producto['product_name']); ?></td>

                                <td data-label="Descripción"><?php echo htmlspecialchars($producto['description']); ?></td>

                                <td data-label="Precio"><?php echo number_format($producto['price'], 2); ?> €</td>

                                <td data-label="Desarrollador"><?php echo htmlspecialchars($producto['developer']); ?></td>

                                <td data-label="Media" class="avg-rating"><?php echo number_format($producto['avg_rating'], 1); ?></td>

                                <td data-label="Valoraciones" class="ratings-count"><?php echo $producto['ratings_count']; ?></td>

                                <td data-label="Tu Valoración">
                                    <div class="star-rating" data-product-id="<?php echo $producto['product_id']; ?>">
                                        <!-- Crea estrellas con loop, da a cada estrella el valor de i -->
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <span class="star <?php echo (isset($user_ratings_map[$producto['product_id']]) && $user_ratings_map[$producto['product_id']] >= $i) ? 'filled' : ''; ?>"
                                                data-value="<?php echo $i; ?>">★</span>
                                        <?php endfor; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else:
                    ?>
                        <tr>
                            <td colspan="7">No hay productos disponibles.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p>© Anabel Martínez Perdomo <br><a href="https://github.com/Rachni"><svg class="github-link" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                    <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
                </svg>
                </svg></a> </p>
    </footer>
</body>

</html>