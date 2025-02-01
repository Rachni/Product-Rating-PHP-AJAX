-- Insertar 20 usuarios
INSERT INTO
    usuarios (name, email, pass)
VALUES
    (
        'Juan Pérez',
        'juan.perez@example.com',
        'password123'
    ),
    (
        'María Gómez',
        'maria.gomez@example.com',
        'securepass456'
    ),
    (
        'Carlos Ruiz',
        'carlos.ruiz@example.com',
        'mypassword789'
    ),
    ('Ana López', 'ana.lopez@example.com', 'ana1234'),
    (
        'Pedro Martínez',
        'pedro.martinez@example.com',
        'pedro5678'
    ),
    (
        'Laura Sánchez',
        'laura.sanchez@example.com',
        'laura91011'
    ),
    (
        'Miguel Torres',
        'miguel.torres@example.com',
        'miguel1213'
    ),
    (
        'Sofía Ramírez',
        'sofia.ramirez@example.com',
        'sofia1415'
    ),
    (
        'Jorge Díaz',
        'jorge.diaz@example.com',
        'jorge1617'
    ),
    (
        'Lucía Morales',
        'lucia.morales@example.com',
        'lucia1819'
    ),
    (
        'Diego Castro',
        'diego.castro@example.com',
        'diego2021'
    ),
    (
        'Elena Ortega',
        'elena.ortega@example.com',
        'elena2223'
    ),
    (
        'Fernando Navarro',
        'fernando.navarro@example.com',
        'fernando2425'
    ),
    (
        'Carmen Ruiz',
        'carmen.ruiz@example.com',
        'carmen2627'
    ),
    (
        'Alejandro Méndez',
        'alejandro.mendez@example.com',
        'alejandro2829'
    ),
    (
        'Patricia Herrera',
        'patricia.herrera@example.com',
        'patricia3031'
    ),
    (
        'Raúl Vargas',
        'raul.vargas@example.com',
        'raul3233'
    ),
    (
        'Isabel Jiménez',
        'isabel.jimenez@example.com',
        'isabel3435'
    ),
    (
        'Roberto Silva',
        'roberto.silva@example.com',
        'roberto3637'
    ),
    (
        'Mónica Rojas',
        'monica.rojas@example.com',
        'monica3839'
    );

-- Insertar 20 videojuegos
INSERT INTO
    productos (name, description, price, developer)
VALUES
    (
        'The Legend of Zelda: Breath of the Wild',
        'Un juego de aventuras en un mundo abierto.',
        59.99,
        'Nintendo'
    ),
    (
        'Cyberpunk 2077',
        'Un RPG de mundo abierto en un futuro distópico.',
        49.99,
        'CD Projekt Red'
    ),
    (
        'Elden Ring',
        'Un juego de acción y rol en un mundo de fantasía.',
        69.99,
        'FromSoftware'
    ),
    (
        'Super Mario Odyssey',
        'Una aventura épica de Mario en diferentes reinos.',
        59.99,
        'Nintendo'
    ),
    (
        'Red Dead Redemption 2',
        'Un juego de mundo abierto en el Viejo Oeste.',
        39.99,
        'Rockstar Games'
    ),
    (
        'The Witcher 3: Wild Hunt',
        'Un RPG de fantasía con una historia profunda.',
        29.99,
        'CD Projekt Red'
    ),
    (
        'God of War',
        'Una épica aventura de Kratos y su hijo Atreus.',
        49.99,
        'Santa Monica Studio'
    ),
    (
        'Animal Crossing: New Horizons',
        'Un juego de simulación de vida en una isla.',
        54.99,
        'Nintendo'
    ),
    (
        'Halo Infinite',
        'Un shooter en primera persona con multijugador.',
        59.99,
        '343 Industries'
    ),
    (
        'Final Fantasy VII Remake',
        'Un remake del clásico RPG de Square Enix.',
        69.99,
        'Square Enix'
    ),
    (
        'Assassin''s Creed Valhalla',
        'Un RPG de acción en la era vikinga.',
        59.99,
        'Ubisoft'
    ),
    (
        'Call of Duty: Modern Warfare',
        'Un shooter en primera persona moderno.',
        49.99,
        'Infinity Ward'
    ),
    (
        'Minecraft',
        'Un juego de construcción y aventuras en un mundo abierto.',
        29.99,
        'Mojang'
    ),
    (
        'Fortnite',
        'Un juego de batalla real con construcción.',
        0.00,
        'Epic Games'
    ),
    (
        'The Last of Us Part II',
        'Un juego de acción y supervivencia.',
        59.99,
        'Naughty Dog'
    ),
    (
        'Horizon Forbidden West',
        'Un juego de acción y aventuras en un mundo postapocalíptico.',
        69.99,
        'Guerrilla Games'
    ),
    (
        'FIFA 23',
        'Un simulador de fútbol con licencias oficiales.',
        59.99,
        'EA Sports'
    ),
    (
        'Resident Evil Village',
        'Un juego de terror y supervivencia.',
        49.99,
        'Capcom'
    ),
    (
        'Stardew Valley',
        'Un juego de simulación de granja y vida rural.',
        14.99,
        'ConcernedApe'
    ),
    (
        'Among Us',
        'Un juego de deducción y trabajo en equipo.',
        4.99,
        'InnerSloth'
    );

-- Insertar votos aleatorios para los usuarios y videojuegos
INSERT INTO
    votos (cantidad, idPr, idUs)
VALUES
    -- Votos de Juan Pérez (usuario 1)
    (5, 1, 1),
    (4, 2, 1),
    (3, 3, 1),
    (5, 4, 1),
    (4, 5, 1),
    -- Votos de María Gómez (usuario 2)
    (5, 6, 2),
    (4, 7, 2),
    (5, 8, 2),
    (3, 9, 2),
    (4, 10, 2),
    -- Votos de Carlos Ruiz (usuario 3)
    (3, 11, 3),
    (4, 12, 3),
    (5, 13, 3),
    (4, 14, 3),
    (3, 15, 3),
    -- Votos de Ana López (usuario 4)
    (5, 16, 4),
    (4, 17, 4),
    (5, 18, 4),
    (3, 19, 4),
    (4, 20, 4),
    -- Votos de Pedro Martínez (usuario 5)
    (4, 1, 5),
    (5, 2, 5),
    (4, 3, 5),
    (3, 4, 5),
    (5, 5, 5),
    -- Votos de Laura Sánchez (usuario 6)
    (5, 6, 6),
    (4, 7, 6),
    (3, 8, 6),
    (5, 9, 6),
    (4, 10, 6),
    -- Votos de Miguel Torres (usuario 7)
    (4, 11, 7),
    (5, 12, 7),
    (4, 13, 7),
    (3, 14, 7),
    (5, 15, 7),
    -- Votos de Sofía Ramírez (usuario 8)
    (5, 16, 8),
    (4, 17, 8),
    (5, 18, 8),
    (3, 19, 8),
    (4, 20, 8),
    -- Votos de Jorge Díaz (usuario 9)
    (4, 1, 9),
    (5, 2, 9),
    (4, 3, 9),
    (3, 4, 9),
    (5, 5, 9),
    -- Votos de Lucía Morales (usuario 10)
    (5, 6, 10),
    (4, 7, 10),
    (3, 8, 10),
    (5, 9, 10),
    (4, 10, 10),
    -- Votos de Diego Castro (usuario 11)
    (4, 11, 11),
    (5, 12, 11),
    (4, 13, 11),
    (3, 14, 11),
    (5, 15, 11),
    -- Votos de Elena Ortega (usuario 12)
    (5, 16, 12),
    (4, 17, 12),
    (5, 18, 12),
    (3, 19, 12),
    (4, 20, 12),
    -- Votos de Fernando Navarro (usuario 13)
    (4, 1, 13),
    (5, 2, 13),
    (4, 3, 13),
    (3, 4, 13),
    (5, 5, 13),
    -- Votos de Carmen Ruiz (usuario 14)
    (5, 6, 14),
    (4, 7, 14),
    (3, 8, 14),
    (5, 9, 14),
    (4, 10, 14),
    -- Votos de Alejandro Méndez (usuario 15)
    (4, 11, 15),
    (5, 12, 15),
    (4, 13, 15),
    (3, 14, 15),
    (5, 15, 15),
    -- Votos de Patricia Herrera (usuario 16)
    (5, 16, 16),
    (4, 17, 16),
    (5, 18, 16),
    (3, 19, 16),
    (4, 20, 16),
    -- Votos de Raúl Vargas (usuario 17)
    (4, 1, 17),
    (5, 2, 17),
    (4, 3, 17),
    (3, 4, 17),
    (5, 5, 17),
    -- Votos de Isabel Jiménez (usuario 18)
    (5, 6, 18),
    (4, 7, 18),
    (3, 8, 18),
    (5, 9, 18),
    (4, 10, 18),
    -- Votos de Roberto Silva (usuario 19)
    (4, 11, 19),
    (5, 12, 19),
    (4, 13, 19),
    (3, 14, 19),
    (5, 15, 19),
    -- Votos de Mónica Rojas (usuario 20)
    (5, 16, 20),
    (4, 17, 20),
    (5, 18, 20),
    (3, 19, 20),
    (4, 20, 20);
    