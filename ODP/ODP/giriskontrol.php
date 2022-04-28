
<?php 
session_start();
if (!isset($_SESSION['isit'])) {
  header('Location:cikis.php');
  exit;
}
else if($_SESSION['isit'] != 'itis'){
header('Location:cikis.php');
exit;
}


 ?>