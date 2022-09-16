<?php include('server.php');


?>


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
            Ayo bergabung!
        </h2>
    </div>
    


    <form method="post" action="register.php">

    <?php include('errors.php');?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" value="<?php echo $username; ?>">
        </div>


        <div class="input-group">
            <label>Kata Sandi</label>
            <input type="password" name="password_1" placeholder="Masukkan kata sandi">
        </div>

        <div class="input-group">
            <label>Konfirmasi Kata Sandi</label>
            <input type="password" name="password_2" placeholder="Masukkan konfirmasi kata sandi">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email" value="<?php echo $email; ?>">
        </div>

        <div class="input-group">
            <button type="submit" name="register" class="buton" >Daftar</button>
        </div>
        <p>
            Sudah bergabung? <a href="login.php">Masuk</a>
        </p>
    </form>
</body>
</html>