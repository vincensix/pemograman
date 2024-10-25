<?php
$servername = "localhost:3309"; // default
$username = "root";			// user MySQL
$password = "";				// password MySQL
$dbname = "db_poin_of_sales";			// nama database

// buat connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_m_produk (id_kategori, nama_produk, id_satuan) VALUES (2, 'Pakaian', 2)";

if ($conn->query($sql) === TRUE) {
	echo "New record created succsessfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
