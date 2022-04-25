<?php

require_once('./connection.php');

$sqlQuery = "DELETE FROM mahasiswa";

if ($conn->query($sqlQuery) === true) {
  echo "Data berhasil dihapus";
} else {
  echo "Data gagal dihapus";
}

?>