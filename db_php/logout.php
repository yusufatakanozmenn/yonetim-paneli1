<?php
include './db_connect.php';
session_start();
unset($_SESSION["id"]);
unset($_SESSION["kadi"]);
header("Location:index.php");
?>