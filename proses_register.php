<?php
include 'koneksii.php'; // Harus sesuai path dan nama file-nya

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Gunakan $koneksi karena itu yang ada di koneksi.php
$query = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";
$result = mysqli_query($koneksi, $query);

if ($result) {
  echo "<script>alert('Pendaftaran berhasil!'); window.location='login.php';</script>";
} else {
  echo "Gagal daftar: " . mysqli_error($koneksi);
}
