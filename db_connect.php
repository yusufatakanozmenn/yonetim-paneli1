<?php
$servername = "localhost";
$database = "3d_menu_yonetim_panel";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo 'connected';
} catch (PDOException $e) {
  echo '<br>' . $e->getMessage();
}
?>