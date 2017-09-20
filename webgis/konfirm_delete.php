<?php	
	include "config.php";
	
	if(isset($_GET['id'])){
	$getid = $_GET['id'];

	$select = "SELECT * FROM spbu WHERE id='$getid'";
	$q_select = mysql_query($select)or die(mysql_error());
	$rows = mysql_num_rows($q_select);

	if($rows > 0){

		$data = mysql_fetch_assoc($q_select);

		$id = $data['id'];
		$namaspbu = $data['namaspbu'];
		$nomorspbu = $data['nomorspbu'];
		$alamat = $data['alamat'];
		$notelpon = $data['notelpon'];
		$fotospbu = $data['fotospbu'];
		
		echo "<h3>Yakin data akan dihapus ?</h3>";
		echo "<p>ID : $id</p>";
		echo "<p>Nama SPBU : $namaspbu</p>";
		echo "<p>Nomor SPBU : $nomorspbu</p>";
		echo "<hr>";
		echo "<p><a href=\"delete.php?id=$id\">Ya</a> | <a href=\"admin.php?id=$id\">Tidak</a></p>";
		}
	}
?>