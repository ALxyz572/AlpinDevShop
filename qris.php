<?php
include 'db.php';
session_start();
$id = $_POST['id'];

$result = $conn->query("SELECT * FROM produk WHERE id=$id");
$produk = $result->fetch_assoc();
?>

<h3>Download Produk:</h3>
<a href="uploads/<?= $produk['file'] ?>" download>Download <?= $produk['judul'] ?></a>
