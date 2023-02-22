<?php include "kullanici_olustur.php"; ?>
<form class="forms-sample" method="post" action="">
    <input id="id" name="id" type="hidden" value="">
    <div class="form-group">
        <label for="isim">İsim</label>
        <input type="text" class="form-control form-dontrol-sm" name="isim" id="isim" value="">
    </div>
    <div class="form-group">
        <label for="email">E-Mail</label>
        <input class="form-control form-control-sm" name="email" id="email" value="" data-inputmask="'alias': 'email'">
    </div>
    <div class="form-group">
        <label for="kadi">Kullanıcı Adı</label>
        <input type="text" class="form-control form-control-sm" name="kadi" id="kadi" value="">
    </div>
    <div class="form-group">
        <label for="sifre">Şifre</label>
        <input type="text" class="form-control form-control-sm" name="sifre" id="sifre" value="">
    </div>
    <div class="form-group row col-md-6">
        <label>Profil Resmi</label>
        <input type="file" name="resim" class="file-upload-default">
        <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info form-control-sm" disabled=""
                placeholder="Resim dosyası seçiniz">
            <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i
                        class="icon-cloud-upload font-12"></i> Dosya
                    Seç</button>
            </span>
        </div>
    </div>
    <button type="submit" name="yonetici_kaydet" class="btn btn-primary btn-icon-text btn-sm">
        <i class="mdi mdi-file-check btn-icon-prepend"></i>
        KAYDET
    </button>
</form>