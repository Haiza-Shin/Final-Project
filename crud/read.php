<?php
include '../ghostwire_login.php';
$result = $conn->query("SELECT * FROM items");
?>

<a href="create.php">Tambah Item</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
