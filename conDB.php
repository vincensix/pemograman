<?php
$servername = "localhost:3309"; // default
$username = "root"; // user MySQL
$password = ""; // Password MySQL
$dbname = "db_poin_of_sales"; // nama database

// Buat connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connection successfully";
?>