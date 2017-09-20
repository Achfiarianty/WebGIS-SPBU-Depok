<?php

	include "config.php";

	if(isset($_POST['submit'])){

		$namaspbu = $_POST['namaspbu'];
		$nomorspbu = $_POST['nomorspbu'];
		$alamat = $_POST['alamat'];
		$notelpon = $_POST['notelpon'];

		$update = "UPDATE spbu SET namaspbu='$namaspbu', nomorspbu='$nomorspbu', alamat='$alamat', notelpon='$notelpon' WHERE nomorspbu='$nomorspbu'";
		$q_update = mysql_query($update)or die(mysql_error());
		if ($q_update) {
			echo "<h3>Data berhasil diupdate</h3>";
			echo "<p><a href='admin.php'>Klik disini untuk melihat data</a></p>";
		}
	}
?>