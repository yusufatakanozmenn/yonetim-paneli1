<?php
include "read.php";
include "update.php"; ?>
<form action="" method="POST" enctype="multipart/form-data">
    <?php foreach ($genel_ayarlarList as $genel) {
        ?>
        <span class="input100-text">Site url</span>
        <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="siteUrl" value="<?= $genel->site_url ?>" required>
            </input>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
            </span>
        </div>
        <span class="input100-text">Site Baslik</span>
        <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="siteTitle" value="<?= $genel->site_baslik ?>" required>
            </input>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-try" aria-hidden="true"></i>
            </span>
        </div>

        <span class="input100-text">Logo</span>
        <div class="wrap-input100">
            <input class="input100" type="file" name="logo" accept="image/*" value="<?= $genel->firma_logo ?>">
            <?= $genel->firma_logo ?>
            </input>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class='bx bxs-cloud-upload'></i>
            </span>
        </div>
        <span class="input100-text">Footer Logo</span>
        <div class="wrap-input100">
            <input class="input100" type="file" name="footer_logo" accept="image/*">
            <?= $genel->firma_footerlogo ?>
            </input>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class='bx bxs-cloud-upload'></i>
            </span>
        </div>
        <span class="input100-text">Favicon</span>
        <div class="wrap-input100">
            <input class="input100" type="file" name="favicon" accept="image/*">
            <?= $genel->favicon ?>
            </input>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class='bx bxs-cloud-upload'></i>
            </span>
        </div>
        <div class="white_card_body">
            <button type="submit" name="genel_ayar_update" class="btn btn-success mb-3">
                <i class="mdi mdi-spin mdi-loading"></i>
                GÜNCELLE
            </button>
        </div>

    <?php }

    ?>
</form>