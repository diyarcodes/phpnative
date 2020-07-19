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

function hapusDataMahasiswa($id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");
    return mysqli_affected_rows($koneksi);
}

function ubahDataMahasiswa($data)
{
    global $koneksi;

    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = mysqli_query($koneksi, "UPDATE mahasiswa SET
                                        nrp = '$nrp',
                                        nama = '$nama',
                                        email = '$email',
                                        jurusan = '$jurusan',
                                        gambar = '$gambar'
                                        WHERE id = $id
                                        ");
    return mysqli_affected_rows($koneksi);
}
