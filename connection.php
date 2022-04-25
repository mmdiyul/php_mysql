<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "php_mysql";

$conn = new mysqli($serverName, $username, $password, $databaseName);
if ($conn->connect_error) {
  die("Connection error");
} else {
  // echo "Connected";
}

?>