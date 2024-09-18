<?php
include "../config/connect.php";



$id      = $_POST['id'];
$id_produk      = $_POST['id_produk'];
$harga      = $_POST['harga'];
$kuantitas      = $_POST['kuantitas'];


$sql = "UPDATE tbpenjualan_dtl 
  SET id = '$id' ,id_produk='$id_produk', harga='$harga', kuantitas='$kuantitas'
  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header("location: menu.php?data=detailpenjualan&sukses=sukses");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
