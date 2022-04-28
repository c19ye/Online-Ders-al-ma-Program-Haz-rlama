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
$vt = new mysqli('127.0.0.1','root','usbw','odp');
if (empty($_POST['mail']) OR empty($_POST['sifre'])) {
	echo '<script language="javascript">';
	echo 'alert("E-Posta veya Şifreniz Boştur.")';
	echo '</script>';

	header( "Refresh:0.1; url=login.php");

}
else
{


// MYSQL Bağlantısı kontrol ediliyor
if (!$vt) { 
    die("Bağlantı başarısız: " . mysqli_connect_error());
}
 
$sql="SELECT * FROM `kullanici` WHERE `mail` =? AND `sifre`=?";
$hazirla=$vt->prepare($sql);
$hazirla->bind_param('ss', $_POST['mail'],$_POST['sifre']);
$hazirla->execute();
$snc = $hazirla->get_result();
if ($snc->num_rows >0) {
	header('Location:anasayfa.php');
	$dz=$snc->fetch_assoc();
	/*OTURUM BAŞLATMA İŞLEMLERİ*/
	session_start();
	$_SESSION['isit']='itis';
	$_SESSION['mail']=$dz['mail'];
	$_SESSION['adi']=$dz['adi'];
	$_SESSION['id']=$dz['id'];
	/***************************/
}
else
{
echo '<script language="javascript">';
	echo 'alert("E-Posta veya Şifreniz Yanlıştır.")';
	echo '</script>';

	header( "Refresh:0.1; url=login.php");
	
}

}
$vt->set_charset("utf8");
mysqli_close($vt);
 ?>