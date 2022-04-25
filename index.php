<?php

require_once('./connection.php');

$sqlQuery = "SELECT * FROM mahasiswa";
$result = $conn->query($sqlQuery);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // $foo = "foo";
    // $bar = "bar";
    // foo-bar
    // echo $foo . '-' . $bar;
    echo "ID: " . $row['id'] . ', Nama: ' . $row['nama'] . ', Jenis Kelamin: ' . $row['jenis_kelamin'] . ', Tempat Lahir: ' . $row['tempat_lahir'] . ', Tanggal Lahir: ' . $row['tanggal_lahir'] . ', Alamat: ' . $row['alamat'] . '<br>';
  }
} else {
  echo "Tidak ada data";
}

?>