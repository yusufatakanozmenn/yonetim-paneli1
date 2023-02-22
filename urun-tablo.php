<?php
include "read.php";
include "delete.php";
?>
<table class="login100-form">
    <tr id="tablo-baslik">
        <td>
            <div class="checkbox-wrapper-42">
                <input id="cbx" type="checkbox" />
                <label class="cbx" for="cbx"></label>
            </div>
        </td>
        <td class="input100-text">Yemek Adı</td>
        <td class="input100-text">Kategori Adı</td>
        <td class="input100-text">Fiyatı</td>
        <td class="input100-text">Yemek Görseli</td>
        <td class="input100-text">Yemek Açıklama</td>
        <td class="input100-text">İşlem</td>
    </tr>
    <?php
    foreach ($productlist as $product) { ?>
        <tr>
            <td class="input100-text">
                <div class="checkbox-wrapper-42">
                    <input id="cbx-1" type="checkbox" />
                    <label class="cbx" for="cbx-1"></label>
                </div>
            </td>
            <td class="input100-text">
                <?= $product->product_name ?>
            </td>
            <td class="input100-text">
                <?= $product->product_category ?>
            </td>
            <td class="input100-text">
                <?= $product->product_cost ?>
            </td>
            <td class="input100-text">
                <?= $product->product_poster ?>
            </td>
            <td class="input100-text">
                <?= $product->product_desc ?>
            </td>
            <td class="input100-text">
                <a href="update-form.php?id=<?= $product->product_id ?>" class="btn btn-danger">Düzenle</a>
                <a href="delete.php?id=<?= $product->product_id ?>" class="btn btn-danger">Sil</a>
            </td>
        </tr>
    <?php } ?>
</table>