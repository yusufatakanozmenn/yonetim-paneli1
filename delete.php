<?php
include "db_connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT product_poster FROM products WHERE product_id = $id";
    $query1 = $conn->prepare($select);
    $query1->execute();
    $sonuc1 = $query1->fetch(PDO::FETCH_OBJ);
    $sonuc1 = $sonuc1->product_poster;
    unlink($sonuc1);
    $delete = "DELETE FROM products WHERE product_id = ?";
    $query = $conn->prepare($delete);
    $sonuc = $query->execute([$id]);
    if ($sonuc) {
        header("Location:urun-tablo.php"); //Silme tamamlandıktan sonra personelliste sayfasına yönlendiriyoruz.
    } else
        echo ("Kayıt silinemedi.");
}
?>