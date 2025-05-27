<?php
include 'koneksii.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tiket WHERE id = $id";
$data = $conn->query($sql)->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Edit Tiket</title>
</head>

<body>
  <h2>Edit Tiket</h2>
  <form method="POST" action="proses_edit.php">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br><br>
    Gendre: <input type="text" name="gendre" value="<?= $data['gendre'] ?>" required><br><br>
    Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>" required><br><br>
    <input type="submit" value="Simpan Perubahan">
  </form>
  <br>
  <a href="index.php">← Kembali</a>
</body>

</html>