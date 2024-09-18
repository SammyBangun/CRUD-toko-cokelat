<?php
include "../config/connect.php";



$id_transaksi      = $_POST['id_transaksi'];
$tanggal      = $_POST['tanggal'];
$id_pelanggan      = $_POST['id_pelanggan'];


$sql = "UPDATE tbpenjualan 
  SET id_transaksi = '$id_transaksi' ,tanggal='$tanggal', id_pelanggan='$id_pelanggan'
  WHERE id_transaksi='$id_transaksi'";

if ($conn->query($sql) === TRUE) {
  header("location: menu.php?data=infopenjualan&sukses=sukses");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
