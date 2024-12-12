<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simpan ke database (contoh)
include './ghostwire_login.php';
$username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
    $stmt->bind_param('ss', $username, $password);

    if ($stmt->execute()) {
        echo 'Registration successful!';
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

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
  <div class="container">
    <div class="form-box">
      <!-- Register Form -->
      <div class="form" id="register">
        <h2>SIGN UP</h2>
        <form action="register.php" method="POST">
          <input type="text" name="username" placeholder="username" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit" class="btn">SIGN UP</button>
        </form>
        <p>Already a user? <a href="login.php">LOGIN</a></p>
      </div>
      <!-- Login Form -->

    </div>
  </div>
</body>
</html>


