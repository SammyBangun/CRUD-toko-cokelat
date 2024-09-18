<?php
include "../config/connect.php";


$id_pemasok      = $_POST['id_pemasok'];
$nama_pemasok    = $_POST['nama_pemasok'];
$alamat            = $_POST['alamat'];
$no_telp           = $_POST['no_telp'];

$sql = "DELETE FROM  tbpemasok WHERE id_pemasok='$id_pemasok'";

if ($conn->query($sql) === TRUE) {
  header("location: menu.php?data=infopemasok&hapus=hapus");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
