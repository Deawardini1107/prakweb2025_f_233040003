<h2>Daftar User</h2>

<a href="index.php?controller=user&method=add">Tambah User</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= $u["id"] ?></td>
        <td><?= $u["nama"] ?></td>
        <td><?= $u["email"] ?></td>
        <td>
            <a href="index.php?controller=user&method=detail&id=<?= $u['id'] ?>">Detail</a> |
            <a href="index.php?controller=user&method=edit&id=<?= $u['id'] ?>">Edit</a> |
            <a href="index.php?controller=user&method=delete&id=<?= $u['id'] ?>"
               onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
