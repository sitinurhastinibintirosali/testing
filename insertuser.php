<?php
	session_start();
	include("connect.php");
	$username = $_POST['username'];
	$password = md5($_POST['password']);	
	$name = $_POST['name'];
	$level = '2';
	$year = $_POST['year'];
	
	$birth = $_POST['birth'];
	$motto = $_POST['motto'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	
		if(mysql_query("INSERT INTO users(username, password, name, level, year) VALUES('$username', '$password', '$name', '$level', '$year')",$con))
		{
			if(mysql_query("INSERT INTO biodata(username, name, birth, motto, address, phone, email) 
							 VALUES('$username', '$name', '$birth', '$motto','$address','$phone','$email')",$con) )
			{
				header("Location: ../mem-admADDMEMBER.php");
			}
			else
			{
				echo "Error inserting data into table ".mysql_error();
			}
		}
		else
		{
			echo "Error inserting data into table ".mysql_error();
		}
		
?>