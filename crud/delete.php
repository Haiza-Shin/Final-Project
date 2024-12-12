<?php
include '../ghostwire_login.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM items WHERE id=$id");
    header("Location: read.php");
}
?>
