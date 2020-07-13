<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'phpnative');

function tambahDataMahasiswa($data)
{
    global $koneksi;

    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('','$nrp','$nama','$email','$jurusan', '$gambar')");
    return mysqli_affected_rows($koneksi);
}
