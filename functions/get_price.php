<?php
include 'config/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk = $_POST['id_produk'];

    $sql = "SELECT harga FROM tbproduk WHERE id_produk = '$id_produk'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['harga'];
    } else {
        echo '0'; // Return 0 if no price is found (you can adjust this)
    }
}
