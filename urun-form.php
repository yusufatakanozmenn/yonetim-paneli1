<?php include "insert.php"; ?>
<form action="" method="POST" enctype="multipart/form-data">

    <span class="input100-text">Yemek Adı</span>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="yemek-adi" placeholder="Yemek Adı" required>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-cutlery" aria-hidden="true"></i>
        </span>
    </div>
    <span class="input100-text">Fiyatı</span>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="yemek-fiyati" placeholder="Fiyatı" required>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-try" aria-hidden="true"></i>
        </span>
    </div>
    <span class="input100-text">Kategori Adı</span>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="kategori-adi" placeholder="Kategori Adı" required>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class='bx bxs-category'></i>
        </span>
    </div>
    <span class="input100-text">Yemek Görseli</span>
    <div class="wrap-input100">
        <input class="input100" type="file" name="yemek-gorseli" accept="image/*">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class='bx bxs-cloud-upload'></i>
        </span>
    </div>
    <span class="input100-text">Yemek İçeriği</span>
    <div class="wrap-input100 validate-input">
        <textarea class="input100-textarea" id="acikalama" name="acikalama" rows="10" cols="10"></textarea>
        <span class=" focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-sort-desc" aria-hidden="true"></i>
        </span>
    </div>
    <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit" name="add">Ekle</button>
    </div>

</form>


