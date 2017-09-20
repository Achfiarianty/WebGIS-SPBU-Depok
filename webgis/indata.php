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
						<li><a href="admin.php" style="color: #FFFFFF;">Dashboard</a></li>
					</ul>
			</div>
		</nav>
		<!-- MAIN -->
		<div class="container-fluid" id="wrapper">
			<div class="container" style="border:1px solid;">
				<h4>INPUT DATA SPBU</h4>
			</div>
			<div class="container" style="padding-top: 10px; border-right:1px solid; border-left:1px solid; border-bottom:1px solid;">
				<form role="form" class="form-horizontal" method="post" name="input_form" enctype="multipart/form-data" action="insert.php">
				<div class="form-group">
					<div class="col-xs-3">
						<label for="namaspbu">Nama SPBU</label>
						<input type="text" name="namaspbu" id="namaspbu" class="form-control">
						</div>
					</div>
				<div class="form-group">
					<div class="col-xs-3">
						<label for="nomorspbu">Nomor SPBU</label>
						<input type="number" name="nomorspbu" id="nomorspbu" class="form-control">
						</div>
					</div>
				<div class="form-group">
					<div class="col-xs-3">
						<label for="alamat">Alamat</label>
						<textarea type="text" name="alamat" id="alamat" class="form-control"></textarea>
						</div>
					</div>
				<div class="form-group">
					<div class="col-xs-3">
						<label for="notelpon">No. Telp</label>
						<input type="text" name="notelpon" id="notelpon" class="form-control">
						</div>
					</div>
				<div class="form-group">
					<div class="col-xs-3">
						<label for="file">Foto SPBU</label>
						<input type="file" name="file" id="file" class="form-control">
						</div>
					</div>
						<div class="form-group">
							<div class="col-xs-2">
								<button type="submit" class="btn btn-success">Simpan</button>
								<button type="reset" class="btn btn-warning"><a href="admin.php">Batal</a></button>
							</div>
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