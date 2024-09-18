<?php
include "../config/connect.php";


$id_pelanggan      = $_POST['id_pelanggan'];
$nama_pelanggan    = $_POST['nama_pelanggan'];
$alamat            = $_POST['alamat'];
$no_telp           = $_POST['no_telp'];

$sql = "INSERT INTO tbpelanggan (id_pelanggan, nama_pelanggan, alamat, no_telp) 
VALUES ('$id_pelanggan', '$nama_pelanggan','$alamat', '$no_telp')";

if ($conn->query($sql) === TRUE) {
    header("location: menu.php?data=infopelanggan&sukses=sukses");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
