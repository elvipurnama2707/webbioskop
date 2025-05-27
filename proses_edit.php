<?php
include 'koneksii.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$gendre = $_POST['gendre'];
$harga = $_POST['harga'];

$sql = "UPDATE tiket SET judul='$judul', gendre='$gendre', harga=$harga WHERE id=$id";
if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
} else {
  echo "Gagal mengupdate data: " . $conn->error;
}
