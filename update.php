<?php

require_once('./connection.php');

$id = $_GET['id'];

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

$sqlQuery = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenisKelamin', tanggal_lahir='$tanggalLahir', tempat_lahir='$tempatLahir', alamat='$alamat' WHERE id='$id'";

if ($conn->query($sqlQuery) === true) {
  echo "Data berhasil diperbarui";
} else {
  echo "Data gagal diperbarui";
}

?>

<br>

<a href="index.php">Kembali ke list data</a>
