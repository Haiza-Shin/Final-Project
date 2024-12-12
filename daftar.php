<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1> Login </h1>
            <div class="input-box"> 
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box"> 
                <input type="password" placeholder="Password" required>
                <i class='bx bx-lock' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember Me </label>
                <a href="#"> Forgot Password?</a>
            </div>

            <button type="submit" class="btn"> Login </button>

            <div class="register-link">
                <p> Tidak punya akun? <a href="#"> Register </a> </p>
            </div>
        </form>
    </div>
    
</body>
</html>