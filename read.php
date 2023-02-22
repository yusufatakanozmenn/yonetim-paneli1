<?php
include "db_connect.php";
$getir_genel_ayarlar="SELECT * FROM ayarlar Where id=1";
$query = $conn->prepare($getir_genel_ayarlar);
$query->execute();
$genel_ayarlarList = $query->fetchAll(PDO::FETCH_OBJ);

$getir="SELECT * FROM products";
$query = $conn->prepare($getir);
$query->execute();
$productsList = $query->fetchAll(PDO::FETCH_OBJ);
?>