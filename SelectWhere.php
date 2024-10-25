<?php
include_once "conDB.php"; // panggil fungsi koneksi ke database

$sql = "SELECT * FROM tbl_m_satuan WHERE nama_satuan='Bungkus'"; // silahkan ganti nama satuan (Bungkus) disini
$result = $conn->query($sql); // variabel conn harus sama dengan file conDB.php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id_satuan"]. " - Nama Satuan: " . $row["nama_satuan"]. "<br>"; 
    }
} else {
    echo "Tidak ada Data";
}
$conn->close();
?>
