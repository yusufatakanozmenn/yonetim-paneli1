<!DOCTYPE html>

<html lang="en" dir="ltr">
<?php
session_start();
include 'db_connect.php';
if ($_SESSION['email'] == '') {
  header("location: login.php");
}
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
  <div class="sidebar close">
    <div class="logo-details">
      <i class="fa-solid fa-cubes-stacked"></i>
      <span class="logo_name">Yönetim Paneli</span>
    </div>
    <ul class="nav-links">
      <!--<li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Anasayfa</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Anasayfa</a></li>
        </ul>
      </li>-->
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa fa-sitemap"></i>
            <span class="link_name">Site Yönetimi</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Site Yönetimi</a></li>
          <li><a href="#">Genel Ayarlar</a></li>
          <li><a href="#">İletşişim Ayarları</a></li>
          <li><a href="#">Sosyal Medya Ayarları</a></li>
          <li><a href="#">Renk Ayarları</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-globe"></i>
          <span class="link_name">Dil Yönetimi</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dil Yönetimi</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-box"></i>
            <span class="link_name">Ürün Yönetimi</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Ürün Yönetimi</a></li>
          <li><a href="#">Ürün Listesi</a></li>
          <li><a href="urun-ekleme.html">Ürün Ekleme</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-gear"></i>
          <span class="link_name">Ayarlar</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Ayarlar</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <div class="name-job">
            <div class="profile_name">Helin</div>
            <div class="job">Admin</div>
          </div>
          <i class="fa-solid fa-right-from-bracket"></i>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <button class="show-site">
        <span class="text">
          <i class="fa fa-eye" aria-hidden="true"></i>
          Siteyi
          Görüntüle</span>
      </button>
    </div>
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