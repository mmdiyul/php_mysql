<?php

require_once('./connection.php');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$tanggalLahir = $_POST['tanggal_lahir'];
$tempatLahir = $_POST['tempat_lahir'];
$alamat = $_POST['alamat'];

echo $nim . '<br>';
echo $nama . '<br>';
echo $jenisKelamin . '<br>';
echo $tanggalLahir . '<br>';
echo $tempatLahir . '<br>';
echo $alamat . '<br>';

$sqlQuery = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, tanggal_lahir, tempat_lahir, alamat) VALUES ('$nim', '$nama', '$jenisKelamin', '$tanggalLahir', '$tempatLahir', '$alamat')";

if ($conn->query($sqlQuery) === true) {
  echo "Data berhasil disimpan";
} else {
  echo "Data gagal disimpan";
}

?>

<br>

<a href="index.php">Kembali ke list data</a>
