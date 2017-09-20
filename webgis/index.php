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
		<script type="text/javascript">
			$(document).ready(function(){
				$(".tip-top").tooltip({
					placement : 'top'
				});
			});
		</script>
		<link rel="stylesheet" type="text/css" href="nivo-slider-master/nivo-slider.css">
		<link rel="stylesheet" type="text/css" href="nivo-slider-master/themes/bar/bar.css">
		
		<style type="text/css">
			#wrapper{
				margin-top: 83px;
				margin-bottom: 33px;
			}
			
			#slider-wrapper{
				width: 747px;
				height: 422px;
			}
			
			.dropdown-menu > li > a:hover{
				background-color: black;
			}
		</style>
		
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="nivo-slider-master/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript">
			var j = jQuery.noConflict();
			j(window).load(function() {
				j('#slider').nivoSlider({
					startSlide:0, //Set starting Slide (0 index)
					slideshowEnd: function(){$('#slider').data('nivo:vars').stop = true;} 
				});
			});
		</script>
	
	</head>
	<body>
	
		<!--NAVIGASI-->
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #CC0000;">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" style="color: #FFFFFF; text-decoration:none; font-size:16px;"><img src="image/home.png">  WEBGIS SPBU KOTA DEPOK</a>
				</div>
					<ul class="nav navbar-nav navbar-right">
						<li class="active" style="color: #FFFFFF;"><a href="index.php">Beranda</a></li>
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
			<div class="container">
				<div class="row">
					<div class="col-sm-8">						
						<div id="slider-wrapper" class="slider-wrapper theme-bar">
							<div id="slider" class="nivoSlider">
								<img src="image/slide1.jpg">
								<img src="image/slide2.jpg">
								<img src="image/slide6.jpg">
							</div>
						</div>
					</div>
					
					<div class="col-sm-4">
						<h4>Link Terkait</h4>
						<p style="border: 1px solid;"><a href="http://www.depok.go.id/"><img src="image/link1.png"></a></p>
						<p style="border: 1px solid;"><a href="http://spbu.pertamina.com/"><img src="image/link2.jpg"></a></p>
						<p style="border: 1px solid;"><a href="http://www.shell.co.id/"><img src="image/link3.jpg"></a></p>
					</div>
				</div>
			</div>
		</div>
		
		<!-- FOOTER -->
		<div class="container-fluid" style="background-color: #CC0000; padding-bottom:20px;">
			<div class="container" style="text-align:center; padding-top:10px;">
				<p><a href="interaktif.php"><img src="image/ic1.png" style="margin-right:100px;" data-toggle="tooltip" class="tip-top" data-original-title="PETA INTERAKTIF"></a>
				<a href="cetak.php"><img src="image/ic2.png" data-toggle="tooltip" class="tip-top" data-original-title="PETA CETAK"></a>
				<a href="dataspbu.php"><img src="image/ic3.png" style="margin-left:100px;" data-toggle="tooltip" class="tip-top" data-original-title="DATA SPBU"></p></a>
			</div>
			
			<div class="container" style="background-color: #FFFFFF; border:1px solid; ">
				<p style="text-align:center; font-size:11pt; padding-top:7px;">&copy; 2016 <b>WEBGIS SPBU KOTA DEPOK. All Rights Reserved.</b></p>
			</div>
		</div>
		
	</body>
</html>