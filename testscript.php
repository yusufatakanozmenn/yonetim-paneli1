<?php
include 'db_connect.php';
$targetDir = "uploads/";

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

$product_category = $_POST['kategori-adi'];
$product_name = $_POST['yemek-adi'];
$product_desc = $_POST['acikalama'];
$product_cost = $_POST['yemek-fiyati'];
$product_model = 0;

$sql = "INSERT INTO products ( `product_category`, `product_name`, `product_desc`, `product_cost`,  `product_model`, `product_poster`) 
    VALUES ('$product_category', '$product_name', '$product_desc', '$product_cost', '$product_model', '$targetFilePath')";

$query = $conn->prepare($sql);
$query->execute();

$count = $query->rowCount();

if ($count > 0) {
    header("Location:./deneme.php?status=ok");
} else {
    header("Location:./deneme.php?status=no");
}
exit;
?>