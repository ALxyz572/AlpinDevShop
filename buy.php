<?php
include 'db.php';
session_start();
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM produk WHERE id=$id");
$produk = $result->fetch_assoc();
?>

<h3>Beli: <?= $produk['judul'] ?></h3>
<img src="qris.jpg" width="300"><br>
<form method="post" action="qris.php">
  <input type="hidden" name="id" value="<?= $id ?>">
  <button type="submit">Saya Sudah Bayar</button>
</form>
