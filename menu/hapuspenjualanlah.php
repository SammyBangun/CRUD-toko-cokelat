<?php
include "../config/connect.php";

$id_transaksi = $_POST['id_transaksi'];

// Mulai transaksi untuk memastikan keduanya berhasil atau gagal
$conn->begin_transaction();

try {
    // Query untuk menghapus data dari tabel pertama (tbpenjualan)
    $sql1 = "DELETE FROM tbpenjualan WHERE id_transaksi='$id_transaksi'";
    $conn->query($sql1);

    // Query untuk menghapus data dari tabel kedua (tbtabel_lain) yang memiliki relasi
    $sql2 = "DELETE FROM tbpenjualan_dtl WHERE id_transaksi='$id_transaksi'";
    $conn->query($sql2);

    // Commit transaksi jika keduanya berhasil
    $conn->commit();
    header("location: menu.php?data=infopenjualan&hapus=hapus");
} catch (Exception $e) {
    // Rollback transaksi jika terjadi kesalahan
    $conn->rollback();
    echo "Gagal menghapus data: " . $e->getMessage();
}

// Tutup koneksi
$conn->close();
