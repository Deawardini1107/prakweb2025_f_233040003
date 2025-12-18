<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User - MVC App</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>👥 Daftar User</h2>

        <a href="index.php?controller=user&method=add" class="btn btn-add">➕ Tambah User Baru</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                <tr>
                    <td><?= $u["id"] ?></td>
                    <td><?= $u["nama"] ?></td>
                    <td><?= $u["email"] ?></td>
                    <td class="actions">
                        <a href="index.php?controller=user&method=detail&id=<?= $u['id'] ?>" class="btn btn-small btn-detail">Detail</a>
                        <a href="index.php?controller=user&method=edit&id=<?= $u['id'] ?>" class="btn btn-small btn-edit">Edit</a>
                        <a href="index.php?controller=user&method=delete&id=<?= $u['id'] ?>" 
                           onclick="return confirm('Yakin ingin menghapus user ini?')" 
                           class="btn btn-small btn-delete">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
