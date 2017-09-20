<?php

	include "config.php";
	
	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$delete = "DELETE FROM spbu WHERE id='$id'";
		$q_delete = mysql_query($delete)or die(mysql_error());
		if ($q_delete) {
			echo "<h3>Data berhasil dihapus</h3>";
			echo "<p><a href='admin.php'>Klik disini untuk melihat data</a></p>";
		}
	}
?>