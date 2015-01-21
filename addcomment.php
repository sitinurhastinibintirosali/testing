<?php 
session_start();
$username=$_SESSION['username'];
include "../../connect.php";
$sql = "SELECT username,name FROM biodata WHERE username='".$username."'";
$result = mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
	$newUsername = $row['username'];
	$newName = $row['name'];
}
$date = date("Y/m/d");
$newComment = $_POST['comment'];

$sql2 = "INSERT INTO comment (username,name,date,comment) Value('".$newUsername."','".$newName."','".$date."','".$newComment."')";
if(mysql_query($sql2,$con))
{
	header('Location:../../../mem-admCOMMENTS.php');
}
else
{
	echo "Error adding comment : " . mysql_error();
}
?>