<?php
// Konfigurasi database
define('DB_HOST', 'localhost');
define('DB_NAME', 'phpnative');
define('DB_USER', 'root');
define('DB_PASS', 'P@ssw0rd!');

// Membuat koneksi ke database MySQL/MariaDB
function getConnection() {
    try {
        $pdo = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8',
            DB_USER,
            DB_PASS
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Koneksi ke database berhasil. ";
        return $pdo;
    } catch (PDOException $e) {
        die("Koneksi ke database gagal: " . $e->getMessage());
    }
}

getConnection();
?>
