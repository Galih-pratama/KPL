<?php  include('server.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk/Daftar MyShop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Selamat datang di MyShop,
            Ayo belanja!
        </h2>
    </div>

    <form method="post" action="login.php">
    <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username">
        </div>


        <div class="input-group">
            <label>Kata Sandi</label>
            <input type="password" name="password" placeholder="Masukkan kata sandi">
        </div>

        <div class="input-group">
            <button type="submit" name="login" class="buton" >Masuk</button>
        </div>
        <p>
            Belum bergabung? <a href="register.php">Daftar</a>
        </p>
        
    </form>
</body>
</html>