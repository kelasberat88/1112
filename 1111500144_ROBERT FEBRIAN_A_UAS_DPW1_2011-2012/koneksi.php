<?php
	$kon=mysql_connect("localhost","root","");
	if(!$kon){
	die("koneksi gagal");
	} else {
	mysql_select_db(robert144) or
	die("koneksi db gagal");
}
?>