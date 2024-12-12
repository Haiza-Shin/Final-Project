<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ghostwire_login";

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
