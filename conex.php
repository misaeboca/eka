<?php
	//Conectar a la base de datos
	$hostname="35.196.135.7";
	$username="ska@ekastudio.net";
	$password="0y6Gf6Hbva1";
	$dbname="ekidutka_eki";
	
	mysql_connect($hostname,$username, $password) o die ("");
	mysql_select_db($dbname);
?>