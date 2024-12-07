<?php
require_once __DIR__ . '/../dbconnection.php';

try {
    $pdo = getConnection();

    // Membuat tabel `admin`
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS admin (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL
        )
    ");

     // Insert data admin default
     $hashedPassword = password_hash('password', PASSWORD_BCRYPT); // Password default
     $pdo->exec("INSERT IGNORE INTO admin (email, password) VALUES ('admin@example.com', '$hashedPassword')");
 

    // Membuat tabel `products`
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS products (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            description TEXT,
            price DECIMAL(10,2) NOT NULL,
            stock INT NOT NULL,
            category VARCHAR(255),
            image VARCHAR(255)
        )
    ");

    // Membuat tabel `company_info`
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS company_info (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            description TEXT NOT NULL,
            email VARCHAR(255),
            phone VARCHAR(255),
            address VARCHAR(255),
            is_active TINYINT(1) DEFAULT 1
        )
    ");

    echo "Migrasi berhasil dijalankan.\n";
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
