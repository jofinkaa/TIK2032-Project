<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class ="input">
        <h1>Login</h1>
        <form action="akun.php" method="POST">
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="email" placeholder="Email">

            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" placeholder="Password">

            </div>
            <a href="home.html">
                <button type="submit" name="login" class="btn-input">Login</button>
            </a>
            <div class="button">
                <p>Belum punya akun?
                    <a href="index.html"> Buat akun disini</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>
