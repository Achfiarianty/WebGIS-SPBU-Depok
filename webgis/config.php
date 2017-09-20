<?php
	//Perintah untuk menghubungkan PHP dengan MySQL
	//mysql_connect('host','user','password')
	$koneksi = mysql_connect('localhost','root','')or die(mysql_error()); //untuk menyambungkan db dan mysql error untuk cek yg error

	//Perintah untuk memilih database
	//mysql_select_db('dbname','source_koneksi')
	$db = mysql_select_db('login',$koneksi)or die(mysql_error());

?>