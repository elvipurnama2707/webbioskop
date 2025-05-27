<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$gendre = $_POST['gendre'];
$harga = $_POST['harga'];

$sql = "INSERT INTO tiket (judul, gendre, harga) VALUES ('$judul', '$gendre', $harga)";
if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
} else {
  echo "Gagal menambahkan data: " . $conn->error;
}
