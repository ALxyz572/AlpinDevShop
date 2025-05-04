<?php
include 'db.php';
session_start();

if ($_SESSION['login'] == "admin" && isset($_FILES['file'])) {
    $name = $_FILES['file']['name'];
    $tmp  = $_FILES['file']['tmp_name'];
    $judul = $_POST['judul'];

    move_uploaded_file($tmp, "uploads/" . $name);
    $conn->query("INSERT INTO produk (judul, file) VALUES ('$judul', '$name')");
    echo "Berhasil upload!";
} else {
    echo "Akses ditolak!";
}
?>
