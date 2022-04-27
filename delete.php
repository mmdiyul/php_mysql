<?php

require_once('./connection.php');

$id = $_GET['id'];

$sqlQuery = "DELETE FROM mahasiswa WHERE id='$id'";

if ($conn->query($sqlQuery) === true) {
  echo "Data berhasil dihapus";
} else {
  echo "Data gagal dihapus";
}

?>

<br>

<a href="index.php">Kembali ke list data</a>