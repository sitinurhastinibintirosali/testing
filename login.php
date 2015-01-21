<?php session_start(); ?>
<title>Redirecting....</title><?php
	//Initialise the session

	if (!isset($_SESSION['username']))
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = md5($_POST['password']);
	}
	include("connect.php");
	$sql = "SELECT * FROM users WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'";
	$result = mysql_query($sql);
	$row = mysql_num_rows($result);
	if ($row == 0)
	{
		echo "<p align='center'>Login Failed!</p>";
		echo "<p align='center'>Redirecting in 3 seconds</p>";
		session_unset();
		echo "<meta http-equiv=\"refresh\"content=\"3;URL=../index.php\">";
	}
	else
	{
		echo "<p align='center'>Login Success</p>";
		echo "<p align='center'>Redirecting in 3 seconds</p>";
		echo "<meta http-equiv=\"refresh\"content=\"3;URL=../mem-admCOMMENTS.php\">";
	}
?>