<?php
include("../config/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nama, username, password) VALUES ('$nama', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Username dan Password telah tersimpan"); window.location.href="../index.php";</script>';
        exit(); // Pastikan untuk menggunakan exit() setelah header()
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
