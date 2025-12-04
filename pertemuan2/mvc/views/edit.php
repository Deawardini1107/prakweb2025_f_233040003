<h2>Edit User</h2>

<form action="index.php?controller=user&method=update" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">

    Nama: <input type="text" name="nama" value="<?= $user['nama'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $user['email'] ?>"><br><br>

    <button type="submit">Update</button>
</form>

<a href="index.php">Kembali</a>
