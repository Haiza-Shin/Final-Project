<?php
include '../ghostwire_login.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $sql = "INSERT INTO items (name) VALUES ('$name')";
    $conn->query($sql);
    header("Location: read.php");
}
?>

<form method="POST" action="">
    <input type="text" name="name" placeholder="Nama Item" required>
    <button type="submit">Tambah</button>
</form>
