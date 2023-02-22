<?php
include "db_connect.php";

$targetDir = "./uploads/";
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $yemekadi = $_POST['yemek-adi'];
    $yemekfiyati = $_POST['yemek-fiyati'];
    $kategoriadi = $_POST['kategori-adi'];
    $aciklama = $_POST['acikalama'];
    $product_poster = basename($_FILES['yemek-gorseli']['name']);
    $product_poster_tmp = $_FILES['yemek-gorseli']['tmp_name'];
    $product_poster_size = $_FILES['yemek-gorseli']['size'];
    $targetFilePath = $targetDir . $product_poster;
    $uploadOk = 1;
    $product_poster_type = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($product_poster_tmp);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFilePath)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($product_poster_size > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $product_poster_type != "jpg" && $product_poster_type != "png" && $product_poster_type != "jpeg"
        && $product_poster_type != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($product_poster_tmp, $targetFilePath)) {
            echo "The file " . htmlspecialchars($product_poster) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $select = "SELECT product_poster FROM products WHERE product_id = $id";
    $query = $conn->prepare($select);
    $query->execute();
    $sonuc = $query->fetch(PDO::FETCH_OBJ);
    $product_poster_db = $sonuc->product_poster;

    if ($product_poster == $product_poster_db) {
        $update1 = "UPDATE products SET product_name=?,product_category=?,product_cost=?,product_desc=? WHERE product_id=?";
        $query1 = $conn->prepare($update1);
        $sonuc1 = $query1->execute([$yemekadi, $kategoriadi, $yemekfiyati, $aciklama, $id]);
        if ($sonuc1) {
            header("Location:urun-tablo.php");
        } else
            echo ("Kayıt güncellenemedi.");
    } else {
        unlink($product_poster_db);
        $update2 = "UPDATE products SET product_name=?,product_category=?,product_cost=?,product_poster=?,product_desc=? WHERE product_id=?";
        $query2 = $conn->prepare($update2);
        $sonuc2 = $query2->execute([$yemekadi, $kategoriadi, $yemekfiyati, $targetFilePath, $aciklama, $id]);
        if ($sonuc2) {
            header("Location:urun-tablo.php");
        } else
            echo ("Kayıt güncellenemedi.");
    }


}


?>