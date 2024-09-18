<?php
include "../config/connect.php";


$id_transaksi   = $_POST['id_transaksi'];
$tanggal        = $_POST['tanggal'];
$id_pelanggan  = $_POST['id_pelanggan'];
$total          = $_POST['total'];

$sql = "INSERT INTO tbpenjualan (id_transaksi, tanggal, id_pelanggan, total) VALUES ('$id_transaksi', '$tanggal','$id_pelanggan', '$total')";

if ($conn->query($sql) === TRUE) {
    header("location: menu.php?data=infopenjualan&sukses=sukses");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
