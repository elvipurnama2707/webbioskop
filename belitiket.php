<?php
include 'koneksii.php';
$query = mysqli_query($koneksi, "SELECT * FROM tiket");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Data Tiket</title>
</head>

<body>
  <h2>Daftar Tiket</h2>
  <a href="tambah_tiket.php">+ Tambah Tiket</a><br><br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Genre</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1;
    while ($row = mysqli_fetch_assoc($query)) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['judul']; ?></td>
        <td><?= $row['gendre']; ?></td>
        <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
        <td>
          <a href="edit_tiket.php?id=<?= $row['id']; ?>">Edit</a> |
          <a href="hapus_tiket.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus?');">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>