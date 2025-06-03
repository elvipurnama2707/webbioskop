<?php
$koneksi = new mysqli("localhost", "root", "", "bioskop");

if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
