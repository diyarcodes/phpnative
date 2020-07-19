<?php
require 'koneksi.php';

$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambahDataMahasiswa.php">Tambah Data</a><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php
        $i = 1;
        while ($d = mysqli_fetch_assoc($mahasiswa)) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td>
                    <a href="ubahDataMahasiswa.php?id=<?= $d['id']; ?>">Ubah</a> |
                    <a href="hapusDataMahasiswa.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin?');">Hapus</a>
                </td>
                <td><img src="" alt=""></td>
                <td><?= $d['nrp']; ?></td>
                <td><?= $d['nama']; ?></td>
                <td><?= $d['email']; ?></td>
                <td><?= $d['jurusan']; ?></td>
            <tr><img src="" alt=""></tr>
            </tr>
        <?php endwhile ?>
    </table>
</body>

</html>