<?php 
session_start();
$id=$_SESSION['id'];
$yenisfr=$_POST['yenisfr'];

$vt = new mysqli('127.0.0.1','root','usbw','odp');

if (!$vt) { 
    die("Bağlantı başarısız: " . mysqli_connect_error());
}

$sql="UPDATE `kullanici` SET `sifre`='$yenisfr' WHERE `id`='$id'";
mysqli_query($vt,$sql);
header('Location:anasayfa.php');
$vt->set_charset("utf8");
mysqli_close($vt);


 ?>