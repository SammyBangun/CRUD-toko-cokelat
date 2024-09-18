<?php
include "../config/connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pemasok = $_POST['id_pemasok'];
    $id_produk = $_POST['id_produk'];
    $pasokan = $_POST['pasokan'];
    $tanggal = $_POST['tanggal'];

    // Hapus data pasokan
    $sql_delete_pasokan = "DELETE FROM tbpasokan WHERE id_pemasok='$id_pemasok' AND id_produk='$id_produk' AND pasokan='$pasokan' AND tanggal='$tanggal'";

    if ($conn->query($sql_delete_pasokan) === TRUE) {
        // Kurangkan stok produk di tbproduk
        $sql_update_produk = "UPDATE tbproduk SET stok = stok - '$pasokan' WHERE id_produk = '$id_produk'";

        if ($conn->query($sql_update_produk) === TRUE) {
            header("location: menu.php?data=infopasokan&hapus=hapus");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
