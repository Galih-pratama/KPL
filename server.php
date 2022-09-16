<?php 
    session_start();

    $username = "";
    $password_1 = "";
    $password_2 = "";
    $email = "";   
    $errors = array();

    $db = mysqli_connect('localhost', 'root', '', 'loginsystem');

    if (isset($_POST['register'])) {
        $username = addslashes($_POST['username']);
        $password_1 = addslashes($_POST['password_1']);
        $password_2 = addslashes($_POST['password_2']);
        $email = addslashes($_POST['email']);

        if (empty($username)) {
             array_push($errors, "Username tidak boleh kosong.");
        }

        if (empty($password_1)) {
            array_push($errors, "Kata sandi tidak boleh kosong.");
       }

       if (empty($password_2)) {
            array_push($errors, "Mohon konfirmasi kata sandi anda.");
       }

       if (empty($email)) {
            array_push($errors, "Email tidak bisa kosong.");
       }

       if ($password_1 != $password_2) {
            array_push($errors, "Kata sandi tidak cocok.");
       }

       if (count($errors) == 0) {
           $password = md5($password_1);
           $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
           mysqli_query($db, $sql);
           $_SESSION['username'] = $username;
           $_SESSION['success'] = "Anda berhasil masuk!";
           header('location: index.php');
       }
    }

    // log in

    if (isset($_POST['login'])) {
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username tidak boleh kosong!");
       }

       if (empty($password)) {
           array_push($errors, "Kata sandi tidak boleh kosong!");
      }

      if (count($errors) == 0) {
          $password = md5($password); 
          $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
          $result = mysqli_query($db, $query);
          if (mysqli_num_rows($result) == 1) {
              
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Anda berhasil masuk!";
            header('location: index.php');
          }
          else {
              array_push($errors, "Username atau kata sandi tidak ada.");
          }
      }
    }


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>