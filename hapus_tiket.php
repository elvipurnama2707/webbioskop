<?php
include 'koneksii.php';

$id = $_GET['id'];
$sql = "DELETE FROM tiket WHERE id = $id";
if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
} else {
  echo "Gagal menghapus data: " . $conn->error;
}
