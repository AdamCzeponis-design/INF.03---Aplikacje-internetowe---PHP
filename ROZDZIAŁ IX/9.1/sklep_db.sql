CREATE DATABASE IF NOT EXISTS `sklep_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sklep_db`;

-- Tabela kategorii
CREATE TABLE IF NOT EXISTS `kategorie` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nazwa` VARCHAR(50) NOT NULL
);

-- Tabela produktów
CREATE TABLE IF NOT EXISTS `produkty` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nazwa` VARCHAR(100) NOT NULL,
    `cena` DECIMAL(10,2) NOT NULL,
    `kategoria_id` INT,
    FOREIGN KEY (`kategoria_id`) REFERENCES `kategorie`(`id`) ON DELETE CASCADE
);

-- Wstawienie przykładowych kategorii
INSERT INTO `kategorie` (`id`, `nazwa`) VALUES
(1, 'Laptopy'),
(2, 'Smartfony'),
(3, 'Akcesoria');

-- Wstawienie przykładowych produktów
INSERT INTO `produkty` (`nazwa`, `cena`, `kategoria_id`) VALUES
('Laptop Gamingowy', 4500.00, 1),
('Biurowy Ultrabook', 2800.00, 1),
('Smartphone Pro', 3200.00, 2),
('Mysz bezprzewodowa', 120.00, 3),
('Klawiatura mechaniczna', 250.00, 3);