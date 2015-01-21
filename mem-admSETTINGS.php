<?php
session_start();
$username=$_SESSION['username'];
include "feature/connect.php";
$sql = "SELECT * FROM users WHERE username='".$username."'";
$result = mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
	$level = $row['level'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/styleADMM.css"/>

<title>Settings</title>

<style type="text/css">
<!-- 
th.header {font-family:"Courier New", Courier, monospace; font-size:22px; font-weight:bolder;}
td.field {font-family:"Times New Roman", Times, serif; font-size:20px; }
td.editor {font-family:"Courier New", Courier, monospace; font-size:12px;}
table.m_container {border-style:inherit; border-color:#999;}
iframe.frame_content{max-width:550px; min-height:100px; overflow:scroll;}
-->
</style>
<script language="javascript">
function openLink(e)
{
	if(e=="comments")
		var newSrc="feature/profile/comments.php";
	if(e=="biodata")
		var newSrc="feature/profile/biodata.php";
	if(e=="settings")
		var newSrc="feature/profile/settings.php";
	document.getElementById("f_content").src=newSrc;
}
function changeClick(f)
{
	if(f=="comments") {
		var newSrc="feature/profile/img/button/comments_click.png";
		document.getElementById("com_but").src=newSrc;
	}
	if(f=="biodata") {
		var newSrc="feature/profile/img/button/biodata_click.png";
		document.getElementById("bio_but").src=newSrc;
	}
	if(f=="settings") {
		var newSrc="feature/profile/img/button/settings_click.png";
		document.getElementById("set_but").src=newSrc;
	}
}
function changeNormal(g)
{
	if(g=="comments") {
		var newSrc="feature/profile/img/button/comments_normal.png";
		document.getElementById("com_but").src=newSrc;
	}
	if(g=="biodata") {
		var newSrc="feature/profile/img/button/biodata_normal.png";
		document.getElementById("bio_but").src=newSrc;
	}
	if(g=="settings") {
		var newSrc="feature/profile/img/button/settings_normal.png";
		document.getElementById("set_but").src=newSrc;
	}
}
function changeHover(h)
{
	if(h=="comments") {
		var newSrc="feature/profile/img/button/comments_hover.png";
		document.getElementById("com_but").src=newSrc;
	}
	if(h=="biodata") {
		var newSrc="feature/profile/img/button/biodata_hover.png";
		document.getElementById("bio_but").src=newSrc;
	}
	if(h=="settings") {
		var newSrc="feature/profile/img/button/settings_hover.png";
		document.getElementById("set_but").src=newSrc;
	}
}
</script>

</head>

<body id="top">

<div class="wrapper col3">
  <div id="gallery">
   <ul>
      <li class="placeholder" style="background-image:url(gallery/Kuala_Lumpur-panorama_FB.jpg);">Image Holder</li>
      <li><a class="swap" href="#"><img src="gallery/large_MFest-2012-Logo-600px.png" alt="" /><span><img src="gallery/large_MFest-2012-Logo-600px - Copy.png" width="950" height="370" alt="" /></span></a></li>      <li><a class="swap" href="#"><img src="gallery/logo_visit-malaysia.jpg" alt="" /><span><img src="gallery/logo_visit-malaysia - Copy.jpg" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="gallery/malaysia logo.png" alt="" /><span><img src="gallery/malaysia logo - Copy.png" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="gallery/wonderfulmalaysia-logo-hasrimy-big.png" alt="" /><span><img src="gallery/wonderfulmalaysia-logo-hasrimy-big - Copy.png" width="950" height="370" alt="" /></span></a></li>
      <li class="last"><a class="swap" href="#"><img src="gallery/logo_1malaysia.jpg" alt="" /><span><img src="gallery/logo_1malaysia - Copy.jpg" width="950" height="370" alt="" /></span></a></li>
    </ul>
  </div>
</div>

<div id="container">


<div id="menu">
<pre><a href="mem-admCOMMENTS.php">COMMENT</a>   <a href="mem-admBIODATA.php">BIODATA</a>   <a href="mem-admSETTINGS.php"class="current_page_item">SETTINGS</a>  <?php if($level=='1')
		print "<a href='mem-admADDMEMBER.php'>ADD MEMBER</a>"; ?>  <a href="mem-admLOGOUT.php">LOGOUT</a>		  </pre>
</div>

<div id="sidebar">
    
     <td align="center" width="18%" height="193">
     
    <div style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 200px;">
    <div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(255, 255, 255);">
    <a style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);" href="http://localtimes.info/Asia/Indonesia/Semarang/">
    <img src="http://localtimes.info/images/countries/id.png"="" border=0="" style="border:0;margin:0;padding:0"=""> Semarang</a>
    </div>
    
    <script src="http://localtimes.info/clock.php?continent=Asia&country=Indonesia&city=Semarang&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=200&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=1024" type="text/javascript">
    </script>
    </div>
    </td>
    
</div>
    
    <html>
<head>
</head>
<body>
<center>

<div id="main">

<script language="javascript">
function check()
{
	var text = document.getElementById('comment').value;
	if(text=="")
	{
		alert("Please Enter A Comment!");
		return false;
	}
	return true;
}
</script>
</head>

<body>

<script language="javascript">
function checkPass()
{
	var oldpass = document.getElementById('oldpass').value;
	var newpass = document.getElementById('newpass').value;
	var newpass2 = document.getElementById('newpass2').value;
	if(oldpass == "")
	{
		alert("Please fill the blank field!");
		return false;
	}
	if(newpass == "")
	{
		alert("Please fill the blank field!");
		return false;
	}
	if(newpass2 == "")
	{
		alert("Please fill the blank field!");
		return false;
	}
	if(newpass != newpass2)
	{
		alert("The password is not match!");
		return false;
	}
	else
		return true;
}
</script>

</head>

<body>
<!-- PHP Fetcher Start -->

<!-- PHP Fetcher End -->
<div id="main">
<form method="post" id="chgPass" name="chgPass" action="feature/profile/update/updatepass.php" onsubmit="return checkPass();">
	<table width="500" border="0" align="left" class="m_container" name="m_container" cellpadding="20%">
<tr>
        	<td>
            	<table width="500" border="0" class="s_container" name="s_container">
<tr>
                    	<th class="header" colspan="3"><h2><strong>Change Password</strong></h2></th>
                  </tr>
                    <tr>
                    	<td width="190" class="field">Old Password</td>
                      <td width="15"><div align="left">:</div></td>
                      <td width="281" class="enter"><input type="password" id="oldpass" name="oldpass"></td>
                  </tr>
                    <tr>
                    	<td class="field">New Password</td>
                        <td><div align="left">:</div></td>
                        <td class="enter"><input type="password" id="newpass" name="newpass"></td>
                    </tr>
                    <tr>
                    	<td class="field">Confirm Password</td>
                        <td><div align="left">:</div></td>
                        <td class="enter"><input type="password" id="newpass2"></td>
                    </tr>
                    <tr>
                    	<td colspan="2" align="center">&nbsp;</td>
                    	<td align="left"><input name="Submit" type="submit" value="Confirm" width="100" height="50" />
                        <input name="Clear" type="reset" value="Clear" width="100" height="50" /></td>
                    </tr>
              </table>
      </td>
        </tr>
    </table>
</form>
</div>
</center>

<div id="footer">
  <id="legal">&copy; 2014.</id>
</div>

</body>
</html>
