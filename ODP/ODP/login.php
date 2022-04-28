

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<meta charset="utf-8">

	<style type="text/css">
	.divv{
		background-color: white;
		width: 350px;
		height: 500px;
		margin: auto;
		border: 3px  ;
		border-radius: 10px;
		position: relative;
		margin-top: 10%;
	}
	#inputt{
		position: relative;
		margin: auto;
		margin-top: 5%;
		width: 85%;
	}
	.button{
		background:linear-gradient(#7E2792,#C173D9);
		width: 85%;
		height: 10%;
		color:white;
		border-radius: 30px;
		margin-top: 50px;
		margin-left: 28px;
	}

	button:hover{

		background:linear-gradient(#C173D9,#7E2792);
	}




</style>
<title>Giriş Yap</title>
</head>
<body background="2.jpg">
<form method="post" action="veritabani.php" >
	<div  class="divv">
		<h1 style="padding: 30px;font-weight: bold;;" align="center" >Giriş Yap</h1>
		<div  id="inputt" class="input-group mb-3">
			<div class="input-group-prepend">
				<span style="border-radius: 10px" class="input-group-text" id="basic-addon1">@</span>
			</div>
			<input style="border-radius: 10px"  type="email" name="mail" class="form-control" placeholder="E-Mail'iniz" aria-label="Username" aria-describedby="basic-addon1">
		</div>
		<div id="inputt" class="input-group mb-3">
			<div class="input-group-prepend">
				<span style="border-radius: 10px"class="input-group-text" id="basic-addon1">***</span>
			</div>
			<input style="border-radius: 10px" name="sifre"  type="password" class="form-control" placeholder="Şifreniz" aria-label="Username" aria-describedby="basic-addon1">
		</div>
	
	

			<button  class="button" href="veritabani.php" type="submit">Giriş Yap</button>

			

<div style="margin-left: 150px;margin-top: 50px;">
			<a  href="register.php">Kayıt Ol</a>
		</div>



	</div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
