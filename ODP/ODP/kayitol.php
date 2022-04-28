
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>
<?php 
$mail=$_POST['kytmail'];
$sifre=$_POST['kytsifre'];
$adi=$_POST['kytadi'];
if (empty($_POST['kytmail']) OR empty($_POST['kytsifre']) OR empty($_POST['kytadi'])) {
	echo '<script language="javascript">';
	echo 'alert("Alanlar Boş Bırakılamaz.")';
	echo '</script>';

	header( "Refresh:0.1; url=register.php");
}
else
{
$vt = new mysqli('127.0.0.1','root','usbw','odp');
$vt->set_charset('UTF8');
// MYSQL Bağlantısı kontrol ediliyor
if (!$vt) { 
    die("Bağlantı başarısız: " . mysqli_connect_error());
}
 
$sql="INSERT INTO kullanici (mail,sifre,adi)
VALUES ('$mail','$sifre','$adi')";
mysqli_query($vt,$sql);

	header('Location:login.php');
	$vt->set_charset("utf8");
mysqli_close($vt);
	


}



 ?>