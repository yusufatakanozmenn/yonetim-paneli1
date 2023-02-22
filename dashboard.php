<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();
ob_start();
include './db_php/db_connect.php';
if ($_SESSION['email'] == '') {
  header("location: login.php");
}
define("DATA","data/");
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
</head>

<body>
  <?php include_once(DATA ."/sidebar.php") ?>
  <section class="home-section">
  <?php include_once(DATA ."/navbar.php") ?>
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