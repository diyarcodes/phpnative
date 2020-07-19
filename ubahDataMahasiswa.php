<?php
require 'koneksi.php';

$id = $_GET['id'];

$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$mhs = mysqli_fetch_assoc($mahasiswa);

if (isset($_POST['ubah'])) {
    if (ubahDataMahasiswa($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp'] ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs['nama'] ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs['email'] ?>">
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan'] ?>">
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar'] ?>">
            </li>
            <button type="submit" name="ubah">Ubah</button>
        </ul>
    </form>
</body>

</html>