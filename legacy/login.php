<form method="post" action="login.php">
  <input type="text" name="username" placeholder="Username"><br>
  <input type="password" name="password" placeholder="Password"><br>
  <button type="submit" name="login">Login</button>
</form>

<?php
session_start();

if (isset($_POST['login'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];


  if ($user == 'zinku' && $pass == 'mezinkusu220809') {
    $_SESSION['login'] = true;
    header("Location: data.php");
    exit;
  } else {
    echo "Login gagal!";
  }
}
?>
