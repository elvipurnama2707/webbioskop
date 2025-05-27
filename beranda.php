<!-- beranda.php -->
<?php
include 'koneksii.php';
// Ambil data film dari database
$sql = "SELECT * FROM film";
$result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Bioskop Online</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .film-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .film-card {
      background: #1e1e1e;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
      transition: transform 0.2s;
    }

    .film-card:hover {
      transform: translateY(-5px);
    }

    .film-card img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .film-card h3 {
      padding: 10px;
      color: #00bcd4;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <div class="film-grid">
    <?php while ($film = mysqli_fetch_assoc($result)): ?>
      <div class="film-card">
        <a href="detail_film.php?id=<?= $film['id']; ?>">
          <img src="uploads/<?= $film['gambar']; ?>" alt="<?= $film['judul']; ?>">
          <h3><?= $film['judul']; ?></h3>
        </a>
      </div>
    <?php endwhile; ?>
  </div>
</body>

</html>


<!-- detail_film.php -->
<?php
include 'koneksi.php';
if (!isset($_GET['id'])) {
  header('Location: beranda.php');
  exit;
}
$id = intval($_GET['id']);
$sql = "SELECT * FROM film WHERE id = $id";
$result = mysqli_query($koneksi, $sql);
$film = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Film - <?= $film['judul']; ?></title>
  <link rel="stylesheet" href="style.css">
  <style>
    .detail-container {
      max-width: 800px;
      margin: 40px auto;
      background: #1e1e1e;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
    }

    .detail-container img {
      width: 100%;
      height: 450px;
      object-fit: cover;
      border-radius: 10px;
    }

    .detail-container h2 {
      color: #00bcd4;
      margin-top: 20px;
    }

    .detail-container p {
      color: #ddd;
      line-height: 1.6;
    }

    .buy-form {
      margin-top: 20px;
      display: flex;
      align-items: center;
    }

    .buy-form input[type="number"] {
      width: 80px;
      padding: 8px;
      margin-right: 10px;
      border: none;
      border-radius: 5px;
      background: #2c2c2c;
      color: #fff;
    }

    .buy-form button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background: #00bcd4;
      color: #fff;
      cursor: pointer;
    }

    .buy-form button:hover {
      background: #0097a7;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <div class="detail-container">
    <img src="uploads/<?= $film['gambar']; ?>" alt="<?= $film['judul']; ?>">
    <h2><?= $film['judul']; ?></h2>
    <p><?= nl2br($film['deskripsi']); ?></p>
    <form action="proses_beli.php" method="POST" class="buy-form">
      <input type="hidden" name="film_id" value="<?= $film['id']; ?>">
      <input type="number" name="jumlah" min="1" value="1" required>
      <button type="submit">Beli Tiket</button>
    </form>
  </div>
</body>

</html>