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

$conn = new mysqli('127.0.0.1','root','usbw','odp');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM program WHERE baslik='$baslik'";

if ($conn->query($sql) === TRUE) {
   echo '<script language="javascript">';
	echo 'alert("Başarıyla Silindi.")';
	echo '</script>';

	header( "Refresh:0.1; url=anasayfa.php");
} else {
    echo '<script language="javascript">';
	echo 'alert("Silme Hatası.")';
	echo '</script>';

	header( "Refresh:0.1; url=anasayfa.php");
}

$conn->close();

 ?>