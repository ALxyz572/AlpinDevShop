<?php
// db.php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'scriptstore';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die('Koneksi gagal: ' . $conn->connect_error);
}
?>

<!-- index.php -->
<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>GOR by Alvin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <marquee style="color:red;">Selamat datang di GOR by Alvin - Jual script Alpin Crasher & Destructive!</marquee>
  <div class="container">
    <h1>Welcome to website GOR by Alvin</h1>
    <div class="product">
      <h3>Alpin Crasher</h3>
      <p>Script premium buat crash sistem</p>
      <form action="buy.php" method="POST">
        <input type="hidden" name="product" value="Alpin Crasher">
        <button type="submit">Beli Sekarang</button>
      </form>
    </div>
    <div class="product">
      <h3>Destructive Script</h3>
      <p>Script auto destructive powerful</p>
      <form action="buy.php" method="POST">
        <input type="hidden" name="product" value="Destructive Script">
        <button type="submit">Beli Sekarang</button>
      </form>
    </div>
  </div>
</body>
</html>

<!-- style.css -->
<style>
body {
  background: #f7f7f7;
  font-family: Arial, sans-serif;
  color: #111;
  padding: 20px;
  animation: fadeIn 1s ease-in;
}
.container {
  max-width: 600px;
  margin: auto;
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
  animation: slideUp 1s ease-out;
}
h1 {
  color: red;
  animation: typing 3s steps(40, end);
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
}
.product {
  margin-top: 20px;
  border-top: 1px solid #ddd;
  padding-top: 10px;
}
button {
  background: red;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
}
button:hover {
  background: darkred;
}
@keyframes fadeIn {
  from { opacity: 0; } to { opacity: 1; }
}
@keyframes slideUp {
  from { transform: translateY(20px); opacity: 0; } to { transform: translateY(0); opacity: 1; }
}
@keyframes typing {
  from { width: 0 } to { width: 100% }
}
</style>
