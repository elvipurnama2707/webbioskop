<?php
include 'koneksii.php'; // koneksi pakai $koneksi

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email    = $_POST['email'];
  $password = $_POST['password'];

  // Cek apakah email ada di database
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
      echo "Login berhasil! Selamat datang, " . $user['nama'];
      // Di sini kamu bisa mulai session dan redirect
    } else {
      echo "Password salah!";
    }
  } else {
    echo "Email tidak ditemukan!";
  }
} else {
  echo "Form belum dikirim dengan benar.";
}
