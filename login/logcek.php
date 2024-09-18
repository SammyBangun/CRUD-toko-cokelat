<?php
session_start();
include("../config/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $username;
            // Set session password (jika diperlukan)
            $_SESSION["password"] = $row["password"];

            header("Location: ../menu/menu.php"); // Redirect ke halaman dashboard
            exit(); // Make sure to exit after redirecting
        } else {
            // Display alert and redirect to index.php
            echo '<script>alert("Password salah"); window.location.href="../index.php";</script>';
        }
    } else {
        // Display alert and redirect to index.php
        echo '<script>alert("Username tidak ditemukan"); window.location.href="../index.php";</script>';
    }

    $conn->close();
}
