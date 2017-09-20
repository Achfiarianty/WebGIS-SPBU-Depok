<?php
	include"config.php";
?>
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
						<li class="active" style="color: #FFFFFF;"><a href="index.php">Dashboard</a></li>
					</ul>
			</div>
		</nav>
		<!-- MAIN -->
		<div class="container-fluid" id="wrapper">
			<div class="container" style="border:1px solid;">
				<h4>WELCOME ADMIN</h4>
			</div>
			<div class="container" style="padding-top: 20px; border-right:1px solid; border-left:1px solid; border-bottom:1px solid;">
				<div class="row">
					<div class="col-sm-2">
						<div class="list-group">
							<a href="admin.php" class="list-group-item active">Kelola</a>
							<a href="indata.php" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> Input Data</a>
							<a href="keluar.php" class="list-group-item"><span class="glyphicon glyphicon-off"></span> Logout</a>
						</div>
					</div>
					<div class="col-sm-10">
						<h3>Data SPBU</h3>
							<table class="table table-hover">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama SPBU</th>
										<th>Nomor SPBU</th>
										<th>Alamat</th>
										<th>No. Telp</th>
										<th>Foto SPBU</th>
										<th>
									</tr>
								</thead>
								<tbody>
								<?php
								$select = "SELECT * FROM spbu ORDER BY id ";
								$q_select = mysql_query($select)or die(mysql_error());
								$rows = mysql_num_rows($q_select);
								if ($rows > 0) {
									while ($data = mysql_fetch_assoc($q_select)) {
										$id = $data['id'];
										$namaspbu = $data['namaspbu'];
										$nomorspbu = $data['nomorspbu'];
										$alamat = $data['alamat'];
										$notelpon = $data['notelpon'];
										$fotospbu = $data['fotospbu'];

									echo "<tr>
									<td>$id</td>
									<td>$namaspbu</td>
									<td>$nomorspbu</td>
									<td>$alamat</td>
									<td>$notelpon</td>
									<td>$fotospbu</td>
									<td><p><a href=\"edit.php?id=$id\">Edit</a> | <a href=\"konfirm_delete.php?id=$id\">Delete</a></p></td>
									</tr>";

									
									}//end while
								}//end if
								?>
								</tbody>
							</table>
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