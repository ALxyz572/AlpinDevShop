<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "admin") {
  echo "Akses hanya untuk admin!";
  exit;
}
?>

<form action="upload_process.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="text" name="judul" placeholder="Judul Produk">
  <button type="submit">Upload</button>
</form>
