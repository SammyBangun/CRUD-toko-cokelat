<?php
include "../config/connect.php";


$id_pelanggan      = $_POST['id_pelanggan'];
$nama_pelanggan    = $_POST['nama_pelanggan'];
$alamat            = $_POST['alamat'];
$no_telp           = $_POST['no_telp'];

$sql = "DELETE FROM  tbpelanggan WHERE id_pelanggan='$id_pelanggan'";

if ($conn->query($sql) === TRUE) {
  header("location: menu.php?data=infopelanggan&hapus=hapus");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
