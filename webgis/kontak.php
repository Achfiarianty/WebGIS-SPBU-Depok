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
	
		<!--NAVIGASI-->
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #CC0000;">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" style="color: #FFFFFF; text-decoration:none; font-size:16px;"><img src="image/home.png">  WEBGIS SPBU KOTA DEPOK</a>
				</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php" style="color: #FFFFFF;">Beranda</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #FFFFFF;">Peta
							<span class="caret"></span></a>
							<ul class="dropdown-menu" style="background-color:#CC0000;">
							  <li><a href="interaktif.php" style="color: #FFFFFF;">Peta Interaktif</a></li>
							  <li><a href="cetak.php" style="color: #FFFFFF;">Peta Cetak</a></li> 
							</ul>
						</li>
						<li><a href="profil.php" style="color: #FFFFFF;">Profil</a>
						</li>
						<li class="dropdown active">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #FFFFFF;">Tentang
							<span class="caret"></span></a>
							<ul class="dropdown-menu" style="background-color:#CC0000;">
							  <li><a href="ttgdpk.php" style="color: #FFFFFF;">Kota Depok</a></li>
							  <li><a href="ttgspbu.php" style="color: #FFFFFF;">SPBU</a></li>
							  <li><a href="dataspbu.php" style="color: #FFFFFF;">Data SPBU</a></li> 
							  <li><a href="kontak.php" style="color: #FFFFFF;">Kontak</a></li> 
							</ul>
						</li>
						<li><a href="masuk.php" style="color: #FFFFFF;">Masuk
						<span class="glyphicon glyphicon-user"></span></a></li>
					</ul>
			</div>
		</nav>
		
		<!-- MAIN -->
		<div class="container-fluid" id="wrapper">
			<div class="container" style="border:1px solid;">
				<h4>KONTAK</h4>
			</div>
			<div class="container" style="padding-top: 30px; border-right:1px solid; border-left:1px solid; border-bottom:1px solid;">
				<div style="width: 400px; height:130px; color: #FFFFFF; background-color:#CC0000;">
					<p style="text-align:justify; padding-top: 20px; margin-left: 20px;"><span class="glyphicon glyphicon-phone"></span> Telp : (+628) 1298873080</p>
					<p style="text-align:justify; margin-left: 20px;"><span class="glyphicon glyphicon-envelope"></span> E-mail: achfiarianty@gmaill.com</p>
				</div>
				<p style="padding-top: 50px;"><b>&#9679 FOLLOW US ON</b></p>
				<div style="width: 400px; height:165px; margin-top: 20px; margin-bottom: 15px; border-style: solid; border-color:#CC0000;">
					<p style="margin-top: 20px; margin-left: 90px;"><a href="https://www.facebook.com/achfia.rianty.3"><img src="image/fb.png" style="width: 100px;"></a>
					<a href="https://twitter.com/achfiafidi"><img src="image/twitter.png" style="width: 100px; margin-left: 20px;"></a></p>
				</div>
			</div>			
		</div>
		
		<!-- FOOTER -->
		<div class="container-fluid" style="background-color: #CC0000; padding-bottom:20px;">
			<div class="container" style="background-color: #FFFFFF; border:1px solid; margin-top:20px;">
				<p style="text-align:center; font-size:11pt; padding-top:7px;">&copy; 2016 <b>WEBGIS SPBU KOTA DEPOK. All Rights Reserved.</b></p>
			</div>
		</div>
		
	</body>
</html>