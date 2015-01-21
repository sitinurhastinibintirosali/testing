<?php
	$host = 'localhost';
	$user = 'root';
	$pswd = '0174561842';
	
	$con = mysql_connect($host, $user, $pswd) or die ('Error connecting to MySQL');
	
	$dbname = "data";
	mysql_select_db($dbname) or die ("Error connecting to Database: ".$dbname);
?>