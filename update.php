<?php

require_once('./connection.php');

$sqlQuery = "UPDATE mahasiswa SET alamat='Jl. Kenangan', tanggal_lahir='2000-01-01' WHERE id='2'";

if ($conn->query($sqlQuery) === true) {
  echo "Data berhasil diperbarui";
} else {
  echo "Data gagal diperbarui";
}

?>