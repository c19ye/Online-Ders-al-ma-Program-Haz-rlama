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
if ($_POST['yenibas'] == null || $_POST['yenibas'] == " " ) {

	echo '<script language="javascript">';
	echo 'alert("Lütfen Bir Başlık Giriniz!!!")';
	echo '</script>';

	header( "Refresh:0.1; url=anasayfa.php");
}
else{
	session_start();
$vt = new mysqli('127.0.0.1','root','usbw','odp');

if (!$vt) { 
    die("Bağlantı başarısız: " . mysqli_connect_error());
}
$rnd=rand();

$id=$_SESSION['id'];

$sqll="INSERT INTO program (rnd,kid) VALUES ('$rnd','$id')";
mysqli_query($vt,$sqll);
for ($i=1; $i < 7 ; $i++) { 
	$pazartesi="pazartesi".$i;
	$pazartesival=$_POST['pazartesi'.$i];
	$sali="sali".$i;
	$salival=$_POST['sali'.$i];
	$carsamba="carsamba".$i;
	$carsambaval=$_POST['carsamba'.$i];
	$persembe="persembe".$i;
	$persembeval=$_POST['persembe'.$i];
	$cuma="cuma".$i;
	$cumaval=$_POST['cuma'.$i];
	$cumartesi="cumartesi".$i;
	$cumartesival=$_POST['cumartesi'.$i];
	$pazar="pazar".$i;
	$pazarval=$_POST['pazar'.$i];
	
	
	/**/
	/**/
$sql="UPDATE program SET $pazartesi='$pazartesival', $sali='$salival',$carsamba='$carsambaval',$persembe='$persembeval',$cuma='$cumaval',$cumartesi='$cumartesival',$pazar='$pazarval' WHERE rnd=$rnd";
mysqli_query($vt,$sql);

}

$text=$_POST['yenibas'];
$search = array("Ç","ç","Ğ","ğ","ı","İ","Ö","ö","Ş","ş","Ü","ü"," ");
$replace = array("c","c","g","g","i","i","o","o","s","s","u","u","-");
$yenibaslik = str_replace($search,$replace,$text);
$giden=$_POST['gidenn'];
$sqlll="UPDATE `program` SET `baslik`='$yenibaslik',`not`='$giden' WHERE `rnd`=$rnd";
mysqli_query($vt,$sqlll);
header('Location:anasayfa.php');
$vt->set_charset("utf8");
mysqli_close($vt);
	

}



 ?>
 

 