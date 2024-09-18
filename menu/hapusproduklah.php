<?php
include "../config/connect.php";


$id_produk      = $_POST['id_produk'];
$nama_produk    = $_POST['nama_produk'];
$jenis_cokelat  = $_POST['jenis_cokelat'];
$harga          = $_POST['harga'];
$stok           = $_POST['stok'];

$sql = "DELETE FROM  tbproduk WHERE id_produk='$id_produk'";

if ($conn->query($sql) === TRUE) {
  header("location: menu.php?data=infoproduk&hapus=hapus");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
