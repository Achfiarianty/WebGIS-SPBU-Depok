<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
				
		<title>WEBGIS SPBU</title>
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
				
		<style type="text/css">
			#wrapper{
				margin-top: 83px;
				margin-bottom: 33px;
			}
			
			.dropdown-menu > li > a:hover{
				background-color: black;
			}
		</style>		
			
	</head>
	<body>
<?php
 $konek=mysql_connect('localhost','root','') or die('server down') ;
 mysql_select_db('login',$konek) ;
 
  $user = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE email='$user' AND password='$password'";
  $query = mysql_query($sql,$konek);
  $row = mysql_num_rows($query);

  if ($row == 1){
	  echo"<div align='center'><h1>Apakah anda admin ?</h1></div>";
    echo"<div align='center'><a href='admin.php'>Ya</a></div>";
  
  }else{
    echo"<script language='javascript'>alert('Terjadi kesalahan, silakan ulangi !')</script>";
  echo"<div align='center'><h1>Login Gagal</h1></div>";
  echo"<div align='center'><a href='masuk.php'>Kembali</a></div>";
  }
?>

 </body>
</html>
