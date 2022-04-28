<!DOCTYPE html>
<html lang="tr">
<head>
  <?php include_once("giriskontrol.php"); ?>
    <meta http-equiv="Content-Type" content="text/html,width=device-width, initial-scale=1.0" name="viewport" charset="utf-8" />
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

     <script >
       

       $(document).ready(function(){



          $("#sfreinput").hide();

           $("#btnsfre").click(function(){
    $("#sfreinput").show();
  });


       });

       $(document).ready(function(){
      $("#yenibaslik").hide();

           $("#yenibtn").click(function(){
    $("#yenibaslik").show();
  });});

     </script>
  
    <style>
        .kutu1{
            
          width: 80%;
          height:85%;
         position: absolute;
         right:6%;
         top: 12% ;  
           
          border-style: solid;
             border-width:10px;
          border-color: black;
          border-radius:10px;
 
       background: transparent;
    border: none;
          
        }  
         .kutu2{
            
          width: 12%;
          height:84%;
          left: 1%;
          top: 12%;
            position: absolute;
          
          border-style: dotted;
             border-width:10px;
          border-color: black;
          border-radius:10px; 
            
        }  
       input [type="text"] 
        {  
    background: transparent;
    border: none;
            
        }
       .button{
    background:linear-gradient(#7E2792,#C173D9);
    width: 85%;
    height: 10%;
    color:white;
    border-radius: 30px;
    margin-top: 50px;
    margin-left: 10%;
  }

  button:hover{

    background:linear-gradient(#C173D9,#7E2792);
  }


        
        
    </style>
    
    
    
    
</head> 




<body style="background-image: url(' 2.jpg'); background-size: auto;background-repeat: no-repeat;">
   
    
    <div style=" width:80%; position:absolute;
         right:7%;border-width:10px; " class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="  p-4" >

    
        
                </div>
  </div>
  
  
</div>

<div class="kutu1">
  
  
  <table class="table table-bordered  " >
    

  <thead>
    <tr>
      <th  scope="col"></th>
     <th scope="col">Pazartesi</th> 
      <th scope="col">Salı</th>
      <th scope="col">Çarşamba</th>
      <th scope="col">Perşembe</th>
      <th scope="col">Cuma</th>
      <th scope="col">Cumartesi</th>
      <th scope="col">Pazar</th>
    </tr>
  </thead>
  <?php 
  
  if ($_SERVER['QUERY_STRING'] != null) 
  {
    $baslik=$_SERVER['QUERY_STRING'];
   
    $connn = new mysqli('127.0.0.1','root','usbw','odp');
   
$sqll = "SELECT * FROM program WHERE baslik='$baslik'";

$resultt = mysqli_query($connn, $sqll);
  
if (mysqli_num_rows($resultt) > 0) {
    
    while($row = mysqli_fetch_assoc($resultt)) {
      $not=$row["not"];
      for ($i=1; $i < 7 ; $i++) {
      $pazartesi=$row["pazartesi".$i];
       $sali=$row["sali".$i];
        $carsamba=$row["carsamba".$i];
         $persembe=$row["persembe".$i];
          $cuma=$row["cuma".$i];
           $cumartesi=$row["cumartesi".$i];
            $pazar=$row["pazar".$i];
    

     
    
   echo '<form action="duzenle.php?'.$baslik.'" method="post"> <tbody >

    <tr>
      <th scope="row">'.$i.'</th>
      
      
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" value="'.$pazartesi.'" type="text" name="pazartesi'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" value="'.$sali.'" name="sali'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" value="'.$carsamba.'" name="carsamba'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" value="'.$persembe.'" name="persembe'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" value="'.$cuma.'" name="cuma'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" value="'.$cumartesi.'" name="cumartesi'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" value="'.$pazar.'" name="pazar'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
 
   
  </tbody>';

  }
  echo  '<textarea placeholder="Not Al" name="gidenn" style="background:transparent;border-color: white;border-radius: 10px ;color: white;width: 30%;height: 15%;position: relative;left: 20%;top: 78%">'.$not.'</textarea>';

echo '<button class="button" name="Sil" style="width: 10%;left: 45%;position: relative;margin-left: 1%;background:linear-gradient(#7E2792,#C173D9);"><a style="color:white" href="sil.php?'.$baslik.'">Sil</a></button>
  ';

     echo '<button class="button" type="submit" name="Sil" style="width: 10%;left: 45%;position: relative;margin-left: 1%;background:linear-gradient(#7E2792,#C173D9);">Düzenle</button>
  </form>' ;
    }

} 
   $connn->set_charset("utf8");
   mysqli_close($connn); 
  }
  else
  {

for ($i=1; $i < 7 ; $i++) { 
    
   echo '<form action="programkaydet.php" method="post"> <tbody >

    <tr>
      <th scope="row">'.$i.'</th>
      
      
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" value="" type="text" name="pazartesi'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" name="sali'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" name="carsamba'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" name="persembe'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" name="cuma'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" name="cumartesi'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
<td>
      <div class="form-group" padding: 5%">
        <input style="margin-top: 5%" type="text" name="pazar'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Konu:">
      </div>
  
</td>
 
   
  </tbody>';

  }
  echo  '<textarea placeholder="Not Al" name="gidenn" style="background:transparent;border-color: white;border-radius: 10px ;color: white;width: 30%;height: 15%;position: relative;left: 20%;top: 78%"></textarea>';
  }
  

 

  ?>

</table>

  
  <input type="text" id="yenibaslik" placeholder="Lütfen Başlık Giriniz:"  name="yenibas" style="width: 10%;left: 35%;position: relative;margin-left: 1%">

  
  <button class="button" id="yenibtn" type="button"  name="Ekle" style="width: 10%;left: 36%;position: relative;margin-left: 1%">Yeni</button>
  
  <button type="submit" class="button" name="Kaydet" href="programkaydet.php" style="width: 10%;left: 37%;position: relative;margin-left: 1%">Kaydet</button>
 </form>
  
</div>
  
  
 <a href="anasayfa.php"> <img  style="width: 9%;height:11%;left: 2.5%;top:1%;position: absolute;
             border-width:5px;
             border-radius:5px; 
             "src="1.png" alt="..." class="rounded-left">
  </a>
  
    <div class="kutu2">
 
 

      <div  style="   background: transparent;
    border: none;" class="left_col scroll-view">
            
             
             <div class="profile clearfix">
             
             
              <h1 style="color: black;top: 5%;font-size:1.5vw;"> Online Program </h1>

             
            </div>
            

          
            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
              <div class="profile_info">
                
                <p style="color: white;margin-left: 10%;margin-right:  20%;font-size:0.8vw;" >Hoşgeldin:<?php if (isset($_SESSION['adi'])) 
                  {
                    echo $_SESSION['adi'];
                  } 
                  else{ echo ""; }
                    ?></p>
               
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
 <div class="profile clearfix">
             
             
              <h1 style="color: black;font-size:1.3vw;"> Kayıtlı Programlar: </h1>

             
            </div>
           <?php 
            
            $id=$_SESSION['id'];
           $conn = new mysqli('127.0.0.1','root','usbw','odp');
$sql = "SELECT baslik FROM program WHERE kid=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  
     
  
    while($row = mysqli_fetch_assoc($result)) {
      $baslik=$row["baslik"];
     /* echo '<input type="submit" value="'.$baslik.'"/>'.'<br>';*/
    
    

     echo '<a id="id" href="anasayfa.php?'.$baslik.'" style="color:white;margin-left: 10%;font-size:0.7vw;" class="idselect" name="tikla">'.$baslik.'</a>'.'<br>';

     
    
    }

} 


$conn->set_charset("utf8");
mysqli_close($conn);


           

           ?>


           
          </div>
         
               

             <button id="btnsfre" class="fas fa-cog" style="background:linear-gradient(#7E2792,#C173D9);width: 95%;
    height: 5%;
    color:white;
    border-radius: 30px;position: absolute;left: 3%;top: 60%"></button>
    <form method="post" action="sifredegis.php">
             <div id="sfreinput">
               <h5 style="color: white;position: absolute;top: 65%;left: 18%;font-size:0.8vw;">Yeni Şifrenizi Giriniz:</h5>
            <input type="text"  style="position: absolute;top: 70%;left: 16%;width: 70%;height: 3%;" name="yenisfr">
            <input type="submit" name="degis" value="Kaydet" style="position: absolute;top: 75%;left: 30%;background:linear-gradient(#7E2792,#C173D9);color: white;width: 40%;height: 5%;">
             </div>
</form>
    <form method="post" action="cikis.php">
           <button  class="button" href="cikis.php" style="position: absolute;top: 80%" type="submit">Çıkış Yap</button>
            </form>

    </div>
   
    
</body>

</html>