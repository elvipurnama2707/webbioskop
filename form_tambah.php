<!DOCTYPE html>
<html>

<head>
  <title>Tambah Tiket</title>
</head>

<body>
  <h2>Form Tambah Tiket</h2>
  <form method="POST" action="tambah_tiket.php">
    Judul: <input type="text" name="judul" required><br><br>
    Gendre: <input type="text" name="gendre" required><br><br>
    Harga: <input type="number" name="harga" required><br><br>
    <input type="submit" value="Simpan">
  </form>
  <br>
  <a href="index.php">← Kembali</a>
</body>

</html>