<!DOCTYPE html>
<html lang="en">


<head>
    <title>Yemek Listesi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/urun.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">

        <div class="container-login100">
            <?php
            include 'insert.php';

            ?>
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="" method="post">
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
                    <!--<span class="input100-text">Yemek Modeli (3D)</span>
                    <div class="wrap-input100 ">
                        <input class="input100" type="file" name="yemek-modeli" accept="video/*">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class='bx bxs-cloud-upload'></i>
                        </span>
                    </div>-->
                    <span class="input100-text">Yemek İçeriği</span>
                    <div class="wrap-input100 validate-input">
                        <textarea class="input100-textarea" id="acikalama" name="acikalama" rows="10"
                            cols="10"></textarea>
                        <span class=" focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="add">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>

</html>