<?php
include "../config/connect.php";


$id_pemasok = $_POST['id_pemasok'];
$id_produk = $_POST['id_produk'];
$pasokan = $_POST['pasokan'];
$tanggal = $_POST['tanggal'];

// Insert data into tbpasokan
$sql_insert = "INSERT INTO tbpasokan (id_pemasok, id_produk, pasokan, tanggal) 
VALUES ('$id_pemasok', '$id_produk', '$pasokan', '$tanggal')";

if ($conn->query($sql_insert) === TRUE) {
    // Update stok produk in tbproduk
    $sql_update = "UPDATE tbproduk SET stok = stok + '$pasokan' WHERE id_produk = '$id_produk'";

    if ($conn->query($sql_update) === TRUE) {
        header("location: menu.php?data=infopasokan&sukses=sukses");
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

$conn->close();
