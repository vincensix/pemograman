<?php
// konfigurasi database
$servername = "localhost:3309"; // default
$username = "root"; // user MySQL
$password = ""; // Password MySQL
$dbname = "db_poin_of_sales";   // nama database

// membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// query SQL untuk mengubah data pada tabel
$sql = "UPDATE tbl_m_produk SET nama_produk='nama_produk' WHERE id_produk='id_produk'";

// jalankan query dan cek apakah berhasil atau tidak
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diubah";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// tutup koneksi
mysqli_close($conn);
?>
