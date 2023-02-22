<?php
include "db_connect.php";
if (isset($_POST['yonetici_kaydet'])) {
    $kullanici_isim = $_POST['isim'];
    $kullanici_email = $_POST['email'];
    $kullanici_sifre = $_POST['sifre'];
    $kullanici_sifre_hash = password_hash($kullanici_sifre, PASSWORD_DEFAULT);
    $kullanici_ad = $_POST['kadi'];
    $sql = "INSERT INTO kullanici (isim, email, sifre, kadi) VALUES ('$kullanici_isim', '$kullanici_email', '$kullanici_sifre_hash', '$kullanici_ad')";
    $query = $conn->prepare($sql);
    $sonuc = $query->execute();
    $count = $query->rowCount();

    if ($count > 0) {
        header("Location:./yeni-yonetici-ekle.php?status=ok");
    } else {
        header("Location:./yeni-yonetici-ekle.php?status=no");
    }
    exit;

}
?>