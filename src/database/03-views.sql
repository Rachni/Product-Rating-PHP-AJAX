USE video_games_rating;

-- VIEW THAT SHOWS AVERAGE RATING AND NUMBER OF RATINGS FOR EACH VIDEO GAME
CREATE VIEW
    producto_ratings AS
SELECT
    productos.id AS product_id,
    productos.name AS product_name,
    productos.description,
    productos.price,
    productos.developer,
    COALESCE(AVG(votos.cantidad), 0) AS avg_rating,
    COUNT(votos.id) AS ratings_count
FROM
    productos
    LEFT JOIN votos ON productos.id = votos.idPr
GROUP BY
    productos.id;
    