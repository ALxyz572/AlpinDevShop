<?php include 'db.php'; session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pass     = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$pass')";
    if ($conn->query($query)) {
        header("Location: login.php");
    } else {
        echo "Gagal daftar";
    }
}
?>

<form method="post">
  <input name="username" placeholder="Username" required>
  <input name="password" type="password" placeholder="Password" required>
  <button type="submit">Daftar</button>
</form>
