-- Eliminar la base de datos si ya existe
DROP DATABASE IF EXISTS video_games_rating;

-- Crear la base de datos
CREATE DATABASE video_games_rating;

-- Usar la base de datos
USE video_games_rating;

-- Crear la tabla 'usuarios'
CREATE TABLE
    IF NOT EXISTS usuarios (
        usuario INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        pass VARCHAR(255) NOT NULL,
        register_date DATETIME DEFAULT CURRENT_TIMESTAMP
    );

-- Crear la tabla 'video_games'
CREATE TABLE
    IF NOT EXISTS productos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        description TEXT,
        price DECIMAL(10, 2),
        developer VARCHAR(100)
    );

CREATE TABLE votos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cantidad INT DEFAULT 0,
    idPr INT NOT NULL,
    idUs INT NOT NULL,  -- Cambiado a INT para que coincida con el tipo de 'usuario' en 'usuarios'
    CONSTRAINT fk_votos_usu FOREIGN KEY (idUs) REFERENCES usuarios(usuario) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_votos_pro FOREIGN KEY (idPr) REFERENCES productos(id) ON DELETE CASCADE ON UPDATE CASCADE
);