<?php include('server.php'); 

// giriş yapmadan bu sayfaya erişme engeli 
if (empty($_SESSION['username'])) {
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk/Daftar MyShop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Halo!</h2>
    </div>

    <div class="content" style="text-align: center;">
        <?php if (isset($_SESSION['success'])): ?>

            <div class="error-success">
                <h3>
                <?php 
                
                echo $_SESSION['success'];
                unset($_SESSION['success']); 
                ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION["username"])): ?>
            <p>Selamat datang!<b> <?php echo $_SESSION['username']; ?></b></p>
            <p><a href="index.php?logout='1'" style="color: red;">Keluar.</a></p>

        <?php endif ?>

        <div class="alert alert-warning">Akun berhasil dibuat. Silahkan kembali masuk di laman masuk.
        <b>Selamat bergabung!</b></div>

        
    </div>
</body>
</html>