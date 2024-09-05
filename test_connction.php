<?php
include 'config.php';  // Menghubungkan file koneksi database

if ($conn->ping()) {
    echo "Koneksi ke database berhasil!";
} else {
    echo "Koneksi ke database gagal: " . $conn->error;
}
?>
