<?php include 'db.php'; session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pass     = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($pass, $user['password'])) {
            $_SESSION['login'] = $username;
            header("Location: index.php");
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Akun tidak ditemukan!";
    }
}
?>

<form method="post">
  <input name="username" placeholder="Username">
  <input name="password" type="password" placeholder="Password">
  <button type="submit">Login</button>
</form>
