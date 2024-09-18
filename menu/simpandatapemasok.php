<?php
include "../config/connect.php";
$id_pemasok      = $_POST['id_pemasok'];
$nama_pemasok    = $_POST['nama_pemasok'];
$alamat            = $_POST['alamat'];
$no_telp           = $_POST['no_telp'];

$sql = "INSERT INTO tbpemasok (id_pemasok, nama_pemasok, alamat, no_telp) 
VALUES ('$id_pemasok', '$nama_pemasok','$alamat', '$no_telp')";

if ($conn->query($sql) === TRUE) {
    header("location: menu.php?data=infopemasok&sukses=sukses");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
