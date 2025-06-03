<!DOCTYPE html>
<html>

<head>
  <title>Tambah Tiket</title>
</head>

<body>
  <h2>Tambah Data Tiket</h2>
  <form action="proses_tambah.php" method="post">
    Judul: <input type="text" name="judul" required><br><br>
    Genre: <input type="text" name="gendre" required><br><br>
    Harga: <input type="number" name="harga" required><br><br>
    <input type="submit" value="Simpan">
  </form>
</body>

</html>