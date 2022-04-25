<?php

require_once('./connection.php');

$sqlQuery = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, tanggal_lahir, tempat_lahir, alamat) VALUES ('1741720032', 'Aji', 'Laki-laki', '1999-06-04', 'Malang', 'Jl. Bondowoso Malang')";

if ($conn->query($sqlQuery) === true) {
  echo "Data berhasil disimpan";
} else {
  echo "Data gagal disimpan";
}

?>