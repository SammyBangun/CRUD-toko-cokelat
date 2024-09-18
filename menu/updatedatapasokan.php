<?php
include "../config/connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pasokan = $_POST['id_pasokan'];
    $id_pemasok = $_POST['id_pemasok'];
    $id_produk = $_POST['id_produk'];
    $pasokan = $_POST['pasokan'];
    $tanggal = $_POST['tanggal'];

    // Update data in tbpasokan
    $sql_update = "UPDATE tbpasokan SET id_pemasok='$id_pemasok', id_produk='$id_produk', pasokan='$pasokan', tanggal='$tanggal' WHERE id_pasokan='$id_pasokan'";


    if ($conn->query($sql_update) === TRUE) {
        header("location: menu.php?data=infopasokan&sukses=update");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
