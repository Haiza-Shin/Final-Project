<?php
include '../ghostwire_login.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM items WHERE id=$id");
    $item = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $conn->query("UPDATE items SET name='$name' WHERE id=$id");
    header("Location: read.php");
}
?>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?= $item['id'] ?>">
    <input type="text" name="name" value="<?= $item['name'] ?>" required>
    <button type="submit">Update</button>
</form>
