<!doctype html>
<html lang="en">

<head>
    <title>PERPUSTAKAAN</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    include 'config.php';
    ?>
</head>

<body>
    <div class="form">
        <img src="avatar3.png" class="avatar">
        <h1>MOKLET LIBRARY</h1><br>
        <h2 class="welcome"> Login</h2>
        <br><br>
        <form action="login.php" method="POST">
            <input class="input" type="text" name="username" placeholder="USERNAME"><br><br>
            <input class="input" type="password" name="password" placeholder="PASSWORD"><br>
            <input class="enter" type="submit" name="login" value="LOGIN">
            <br>
        </form>
        <a href="register.php" class="enter"><h3>Registrasi</h3></a>
    </div>
</body>
</html>
<?php
include 'config.php';
if (@$_POST['simpan']) {
    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $pass = md5($password);

    mysqli_query($koneksi, "INSERT into user(username,password) values ('$username,  $pass')");
}
?>
