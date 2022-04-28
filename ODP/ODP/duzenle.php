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

$baslik=$_SERVER['QUERY_STRING'];

$vt = new mysqli('127.0.0.1','root','usbw','odp');

if (!$vt) { 
    die("Bağlantı başarısız: " . mysqli_connect_error());
}

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
	
	

$sql="UPDATE program SET $pazartesi='$pazartesival', $sali='$salival',$carsamba='$carsambaval',$persembe='$persembeval',$cuma='$cumaval',$cumartesi='$cumartesival',$pazar='$pazarval' WHERE baslik='$baslik'";
mysqli_query($vt,$sql);
}
$not=$_POST['gidenn'];
$sql="UPDATE `program` SET `not`='$not' WHERE `baslik`='$baslik'";
mysqli_query($vt,$sql);
header('Location:anasayfa.php?'.$baslik);
$vt->set_charset("utf8");
mysqli_close($vt);

 ?>