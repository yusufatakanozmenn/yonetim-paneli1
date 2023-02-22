<?php
session_start();

include './db_connect.php';

if (isset($_POST['login'])) {
    $user_email = $_POST["user_email"];
    $user_pass = $_POST["user_pass"];

    $get_user_pass_hash = "SELECT sifre FROM kullanici WHERE kadi='$user_email'";
    $get_user_pass = $conn->prepare($get_user_pass_hash);
    $get_user_pass->execute();
    $user_pass_hash = $get_user_pass->fetchColumn();
    if (password_verify($user_pass, $user_pass_hash)) {
        $get = $conn->prepare("SELECT * FROM kullanici WHERE kadi='$user_email' AND sifre='$user_pass_hash'");
        $get->execute();
        if ($get->rowCount() > 0) {
            $_SESSION['kadi'] = $user_email;
            header("location:dashboard.php");
            $_SESSION['success'] = "You are logged in";
        }
    } else {
        header("location:login.php?status=no");
    }
}
?>