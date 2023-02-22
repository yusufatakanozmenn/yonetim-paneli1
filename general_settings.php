<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();
ob_start();
include './db_php/db_connect.php';
if ($_SESSION['email'] == '') {
    header("location: login.php");
}
define("DATA", "data/");
define("PAGE", "include/");
?>

<head>
    <meta charset="UTF-8">
    <title>3D Menü Panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/svg-with-js.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/solid.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/regular.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />

    <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css" />

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css" />

    <!-- <link rel="stylesheet" href="css/style1.css" /> -->

</head>

<body>
    <?php include_once(DATA . "/sidebar.php"); ?>
    <section class="home-section">
        <?php
        include_once(DATA . "/navbar.php");
        include_once(PAGE . "/general_settings_form.php");

        ?>

    </section>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
</body>

</html>