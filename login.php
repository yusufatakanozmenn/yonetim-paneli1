<?php
session_start();

include 'db_connect.php';

if (isset($_POST['login'])) {
    $user_email = $_POST["email"];
    $user_pass = $_POST["password"];

    $giris = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_pass'";
    $getir = $conn->prepare($giris);
    $getir->execute();

    if ($getir->rowCount() > 0) {
        $_SESSION['email'] = $user_email;
        header("location:dashboard.php");
        $_SESSION['success'] = "You are logged in";
    } else {
        header("location: login.php");
        $_SESSION['error'] = "<div class='wrap-input100 validate-input' role='alert' data-validate='Oh snap! Invalid login details.'></div>";
    }

}
?>