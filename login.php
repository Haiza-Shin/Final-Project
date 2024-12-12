<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

include 'ghostwire_login.php';

    $stmt = $conn->prepare("SELECT password FROM user WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        echo 'Login successful!';
    } else {
        echo 'Invalid username or password!';
    }

    $stmt->close();
    $conn->close();
}
?>
      <div class="form" id="login">
        <h2>LOGIN</h2>
        <form action="login.php" method="POST">
          <input type="username" name="username" placeholder="username" required>
          <input type="password" name="password" placeholder="Password" required>
          <div class="remember-me">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me?</label>
          </div>
          <button type="submit" class="btn">LOGIN</button>
        </form>
        <p><a href="#">Forgot Password?</a></p>
        <p>Need an account? <a href="register.php">SIGN UP</a></p>
      </div>

      </form>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

</body>


