<?php
include 'koneksii.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id=$id");
$tiket = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Edit Tiket</title>
</head>

<body>
  <h2>Edit Tiket</h2>
  <form method="post" action="proses_edit.php">
    <input type="hidden" name="id" value="<?= $tiket['id']; ?>">
    Judul: <input type="text" name="judul" value="<?= $tiket['judul']; ?>" required><br><br>
    Genre: <input type="text" name="gendre" value="<?= $tiket['gendre']; ?>" required><br><br>
    Harga: <input type="number" name="harga" value="<?= $tiket['harga']; ?>" required><br><br>
    <input type="submit" value="Update">
  </form>
</body>

</html>