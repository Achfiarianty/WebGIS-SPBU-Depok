<?php

include"config.php";
		$namaspbu = $_POST['namaspbu'];
		$nomorspbu = $_POST['nomorspbu'];
		$alamat = $_POST['alamat'];
		$notelpon = $_POST['notelpon'];
		$fotospbu = $_FILES['file']['name'];
		
		$insert = "INSERT INTO spbu VALUES('', '$namaspbu', '$nomorspbu ', '$alamat ','$notelpon', '$fotospbu')";
		$q_insert = mysql_query($insert)or die(mysql_error());
		if ($q_insert) {
		$source = $_FILES['file']['tmp_name'];
		$destination = "./uploaded/".$_FILES['file']['name'];
		
		if(!file_exists("uploaded")){
			mkdir("uploaded");
		}
		
		
		if(substr($_FILES['file']['type'], 0, 5) == "image"){
			move_uploaded_file($source, $destination);
		}
		else{
			echo "<p>File yang diupload bukan gambar";
		}

		move_uploaded_file($source, $destination);

echo"Data berhasil disimpan";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<p>Klik<a href=admin.php> disini </a>untuk melihat data</p>";
}
?>