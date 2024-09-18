<?php
$servername = "localhost";
$username = "id21619223_3199344_kahlil";
$password = "Kahlil#8";
$mydb   = "id21619223_db_tokocokelatkr";
$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
    die("Koneksi Gagal " . $conn->connect_error);
}

$id_transaksi = $_POST['id_transaksi'];
$id_produk = $_POST['id_produk'];
$harga = $_POST['harga'];
$kuantitas = $_POST['kuantitas'];

$sql_insert = "INSERT INTO tbpenjualan_dtl (id_transaksi, id_produk, harga, kuantitas) VALUES ('$id_transaksi', '$id_produk','$harga', '$kuantitas')";

if ($conn->query($sql_insert) === TRUE) {
    // Update total harga in tbpenjualan
    $sql_update_total = "UPDATE tbpenjualan SET total = (SELECT SUM(harga * kuantitas) FROM tbpenjualan_dtl WHERE id_transaksi = '$id_transaksi') WHERE id_transaksi = '$id_transaksi'";

    if ($conn->query($sql_update_total) === TRUE) {
        // Mengurangi stok produk di tbproduk
        $sql_update_stok = "UPDATE tbproduk SET stok = stok - $kuantitas WHERE id_produk = '$id_produk'";
        
        if ($conn->query($sql_update_stok) === TRUE) {
            header("location: menu.php?data=detailpenjualan&sukses=sukses");
        } else {
            echo "Error updating stok produk: " . $conn->error;
        }
    } else {
        echo "Error updating total harga: " . $conn->error;
    }
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

$conn->close();
?>
