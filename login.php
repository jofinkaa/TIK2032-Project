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
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div id="form">
    <h1>Buat Akun</h1>
    <form method="post" action="login1.php">
    <label for="user">username:</label>
    <input type="text" id="user" name="user" required></br></br>

    <label for="pass">password:</label>
    <input type="password" id="pass" name="pass" required></br></br>

    <label for="email">email:</label>
    <input type="email" id="email" name="email" required></br></br>

    <button type="submit"> Buat akun</button>
    <div class="bottom">
        <p> sudah punya akun?
            <a href="akun1.php"> Login disini</a>
        </p>
    </div>
</form>
    </div>
</body>
</html>
