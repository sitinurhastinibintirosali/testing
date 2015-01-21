<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment List</title>
</head>

<body>
<!--PHP Fetcher Start!-->
<?php include "../connect.php";
$sql = "SELECT * FROM comment ORDER BY no DESC";
$result = mysql_query($sql,$con);

echo "<table border=0 width=500px align='left'>";
while($row=mysql_fetch_array($result))
{
	$no = $row['no'];
	$username = $row['username'];
	$name = $row['name'];
	$date = $row['date'];
	$comment = $row['comment'];
	echo "<tr>";
	echo "<td width='150'>".$username."</td>";
	echo "<td width='350'>".$name."</td>";
	echo "</tr>";
	echo "<tr><td colspan='2'>".$date."</td></tr>";
	echo "<tr><td colspan='2'>".$comment."</td></tr>";
	echo "<tr><td colspan='2'>________________________________________  ".$no."</td></tr>";
}
echo "</table>";
?>
</body>
</html>
