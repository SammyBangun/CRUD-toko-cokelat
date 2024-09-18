<?php
include "../config/connect.php";

// Check connection
if ($conn->connect_error) {
  die("Koneksi Gagal " . $conn->connect_error);
}


$id_pemasok      = $_POST['id_pemasok'];
$nama_pemasok    = $_POST['nama_pemasok'];
$alamat            = $_POST['alamat'];
$no_telp           = $_POST['no_telp'];

$sql = "UPDATE tbpemasok
  SET id_pemasok = '$id_pemasok' , nama_pemasok='$nama_pemasok',  alamat='$alamat',  no_telp='$no_telp'
  WHERE id_pemasok='$id_pemasok'";

if ($conn->query($sql) === TRUE) {
  header("location: menu.php?data=infopemasok&sukses=sukses");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
