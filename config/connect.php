<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb   = "db_toko_cokelat";
// Create connection
$conn = new mysqli($servername, $username, $password, $mydb);

// Check connection
if ($conn->connect_error) {
    die("Koneksi Gagal " . $conn->connect_error);
}
