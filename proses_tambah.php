<?php
include 'koneksii.php';

$judul = $_POST['judul'];
$gendre = $_POST['gendre']; // sesuaikan nama variabel
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO tiket (judul, gendre, harga) VALUES ('$judul', '$gendre', '$harga')");

header("Location: belitiket.php");
