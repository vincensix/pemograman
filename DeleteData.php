<?php
include_once "conDB.php"; // panggil fungsi koneksi ke database

$sql = "DELETE FROM tbl_m_produk WHERE id_produk=13";

if ($conn->query($sql) === TRUE) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
