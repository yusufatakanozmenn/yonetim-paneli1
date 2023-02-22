<?php
include "db_connect.php";
$getir_genel_ayarlar="SELECT * FROM ayarlar Where id=1";
$query = $conn->prepare($getir_genel_ayarlar);
$query->execute();
$genel_ayarlarList = $query->fetchAll(PDO::FETCH_OBJ);

$getir = "SELECT * FROM kullanici";
$query = $conn->prepare($getir);
$query->execute();
$kullaniciList = $query->fetchAll(PDO::FETCH_OBJ);

?>