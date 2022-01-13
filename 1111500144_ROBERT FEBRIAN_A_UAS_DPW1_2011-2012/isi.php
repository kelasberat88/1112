<?php
	include "koneksi.php";
	
	mysql_query("insert into robert (nama144,email144,komentar144,jeniskelamin144,telepon144,agama144) values
	('$_POST[txtNama144]','$_POST[txtEmail144]','$_POST[txtKoment144]','$_POST[JenKel144]','$_POST[Telp144]','$_POST[Agama144]')
	");
	
?>