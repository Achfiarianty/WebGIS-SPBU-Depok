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
						<li class="active" ><a href="profil.php" style="color: #FFFFFF;">Profil</a>
						</li>
						<li class="dropdown">
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
				<h4>PROFIL</h4>
			</div>
			<div class="container" style="height: 431px; padding-top: 10px; border-right:1px solid; border-left:1px solid; border-bottom:1px solid;">
				<p style="text-align:justify;">Webgis SPBU Kota Depok adalah sebuah website sistem informasi geografis SPBU di wilayah Kota Depok, yang dapat memberikan informasi kepada pengguna mengenai gambaran titik lokasi SPBU yang berada di wilayah Kota Depok serta informasi mengenai jalan yang berada di wilayah perbatasan Kota Depok. </p>
				<p style="text-align:justify;">Webgis SPBU Kota Depok dapat digunakan oleh masyarakat dalam hal mencari lokasi SPBU di wilayah Kota Depok. Dengan adanya web Sistem Informasi Geografis ini dapat membantu masyarakat yang berada di wilayah Kota Depok dan sekitarnya, dalam hal mencari lokasi SPBU yang terdekat di wilayah Kota Depok dengan titik lokasi dimana pengguna berada.</p>
				<p style="text-align:justify;"><b>Petunjuk Melihat Peta Interaktif</b></p>
				<p style="text-align:justify;">1. Simbol + (tambah) digunakan untuk memperbesar tampilan peta</p>
				<p style="text-align:justify;">2. Simbol - (kurang) digunakan untuk memperkecil peta</p>
				<p style="text-align:justify;">3. Simbol lapisan atau yang terlihat seperti belah ketupat berwarna biru merupakan lapisan-lapisan yang ada pada peta</p>
				<p style="text-align:justify;">4. Untuk melihat informasi dari titik pom, <b>hilangkan tanda centang pada lapisan kecamatan yang berada pada simbol lapisan</b></p>
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