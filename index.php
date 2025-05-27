<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <title>Beranda - Bioskop</title>
</head>

<body>
  <h1>Selamat datang di Bioskop Online</h1>
  <?php if (!isset($_SESSION['user'])): ?>
    <a href="login.php">Masuk</a> | <a href="register.php">Daftar</a>
  <?php else: ?>
    <p>Halo, <?= $_SESSION['user']['nama'] ?> | <a href="logout.php">Keluar</a></p>
  <?php endif; ?>

  <h2>Film Tersedia</h2>
  <div>
    <img src="image/lokanata.webp" alt="Lokananta" width="200">
    <h3>Lokananta</h3>
    <p>Drama | 13+ | 1 jam 26 menit</p>
    <p>Rp 20.000</p>
    <a href="detail_film.php?judul=Lokananta">Lihat</a>
  </div>
</body>

</html>