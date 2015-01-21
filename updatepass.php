<?php 
session_start();

include "../../connect.php";

$username=$_SESSION['username'];
$oldPass = $_POST["oldpass"];
$newPass = $_POST["newpass"];

$sql = "SELECT password FROM users WHERE username='".$username."'";
$result = mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
	$curpass = $row['password'];
}

if($oldPass!=$curpass)
{
	header('Location:failed.php');
}
else
{

	$sql2 = "UPDATE users SET password='".$newPass."' WHERE username='".$username."'";
	if(mysql_query($sql2,$con))
	{
		header('Location:success.php');
	}
	else
	{
		echo "Error changing password : " . mysql_error();
	}
}
?>