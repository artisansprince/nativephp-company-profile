<?php
require_once __DIR__ . '/../dbconnection.php';

try {
    $pdo = getConnection();

    // Menghapus tabel `admin`
    $pdo->exec("DROP TABLE IF EXISTS admin");

    // Menghapus tabel `products`
    $pdo->exec("DROP TABLE IF EXISTS products");

    // Menghapus tabel `company_info`
    $pdo->exec("DROP TABLE IF EXISTS company_info");

    echo "Rollback migrasi berhasil dijalankan.\n";
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
