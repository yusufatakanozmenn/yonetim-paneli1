<?php
include "./db_php/read.php";
include "./db_php/update_general_settings.php"; ?>
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left d-flex align-items-center">
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Genel Ayarlar</h3>
                        <!-- <ol class="breadcrumb page_bradcam mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">AnaSayfa</a></li>
                                    <li class="breadcrumb-item active">Analitik</li>
                                </ol> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="forms-sample" method="post" action="">
                <?php
                foreach ($genel_ayarlarList as $ayar) { ?>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Logo Yükle</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body">
                                    <h6 class="card-subtitle mb-2">Logo</h6>
                                    <div class="main-title">
                                        <input class="input100" type="file" name="logo" accept="image/*"
                                            value="<?= $ayar->firma_logo ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Mail Şablonu ve Footer Logo Yükle</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body">
                                    <h6 class="card-subtitle mb-2">Logo</h6>
                                    <div class=" mb-0">
                                        <input class="input100" type="file" name="footer_logo"
                                            value="<?= $ayar->firma_footerlogo ?>" accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Favicon Yükle</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body">
                                    <h6 class="card-subtitle mb-2">Favicon </h6>
                                    <div class=" mb-0">
                                        <input class="input100" type="file" name="favicon" value="<?= $ayar->favicon ?>"
                                            accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                    </div>
                                </div>
                            </div>

                            <div class="white_card_body">
                                <h6 class="card-subtitle mb-2 mb-2">Site URL
                                </h6>
                                <div class=" mb-0">
                                    <input type="text" class="form-control" name="siteUrl" value="<?= $ayar->site_url ?>">
                                </div>
                            </div>

                            <div class="white_card_body">
                                <h6 class="card-subtitle mb-2 mb-2">Site Title</h6>
                                <div class=" mb-0">
                                    <input type="text" class="form-control" name="siteTitle"
                                        value="<?= $ayar->site_baslik ?>">
                                </div>
                            </div>

                            <div class="white_card_body">
                                <h6 class="card-subtitle mb-2 mb-2">Para Birimi</h6>
                                <div class="common_select">
                                    <select class="nice_Select wide mb_30" name="pbirim">
                                        <option value="tl">TL</option>
                                        <option value="usd">USD</option>
                                        <option value="euro">EURO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="white_card_body">
                                <h6 class="card-subtitle mb-2 mb-2">Firma Tanıtım Video Url Linki</h6>
                                <div class=" mb-0">
                                    <input type="text" class="form-control" name="videoUrl" value="<?= $ayar->video_url ?>">
                                </div>

                            </div>
                            <div class="white_card_body">
                                <h6 class="card-subtitle mb-2 mb-2">SEO Kelimeler (Keywords)
                                    <small>(Kelimenin sonuna virgül koyunuz.)</small>
                                </h6>
                                <div class=" mb-0">
                                    <input type="text" class="form-control" name="site_keyw"
                                        value="<?= $ayar->site_keyw ?>">
                                </div>

                            </div>
                            <div class="white_card_body">
                                <h6 class="card-subtitle mb-2 mb-2">SEO Açıklama (Description)</h6>
                                <div class=" mb-0">
                                    <textarea class="form-control" maxlength="225" rows="3"
                                        name="seo_desc"><?= $ayar->site_desc ?></textarea>
                                </div>

                            </div>
                            <div class="white_card_body">
                                <button type="submit" name="genel_ayar_update" class="btn btn-success mb-3">
                                    <i class="mdi mdi-spin mdi-loading"></i>
                                    GÜNCELLE
                                </button>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </form>
        </div>
    </div>
</div>