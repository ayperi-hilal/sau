<?php
session_start();
$kullaniciadi=$_SESSION["kullaniciadi"];
session_destroy();
header('location:index.php');




?>