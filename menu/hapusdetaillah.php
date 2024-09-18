<?php
include "../config/connect.php";


$id_transaksi = $_POST['id_transaksi'];
$id_produk = $_POST['id_produk'];
$harga = $_POST['harga'];
$kuantitas = $_POST['kuantitas'];

// Mengambil total harga sebelumnya dari tbpenjualan
$sqlGetTotal = "SELECT total FROM tbpenjualan WHERE id_transaksi='$id_transaksi'";
$resultGetTotal = $conn->query($sqlGetTotal);

if ($resultGetTotal->num_rows > 0) {
    $row = $resultGetTotal->fetch_assoc();
    $totalSebelumnya = $row['total'];

    // Mengurangkan harga produk yang dihapus dari total
    $totalBaru = $totalSebelumnya - ($harga * $kuantitas);

    // Update total harga di tbpenjualan
    $sqlUpdateTotal = "UPDATE tbpenjualan SET total='$totalBaru' WHERE id_transaksi='$id_transaksi'";
    $conn->query($sqlUpdateTotal);

    // Hapus data dari tbpenjualan_dtl
    $sqlDeleteDetail = "DELETE tbpenjualan_dtl.* FROM tbpenjualan_dtl INNER JOIN tbpenjualan WHERE tbpenjualan_dtl.id_transaksi = '$id_transaksi' AND tbpenjualan_dtl.id_produk = '$id_produk'";

    if ($conn->query($sqlDeleteDetail) === TRUE) {
        header("location: menu.php?data=detailpenjualan&hapus=hapus");
    } else {
        echo "Error: " . $sqlDeleteDetail . "<br>" . $conn->error;
    }
} else {
    echo "Error: Tidak dapat mengambil total sebelumnya.";
}

$conn->close();
