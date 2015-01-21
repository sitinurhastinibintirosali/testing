<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/styleADMM.css"/>

<title>Add Member</title>

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
function checkField()
{
	var username = document.getElementById("username").value;
	var name = document.getElementById("name").value;
	var year = document.getElementById("year").value;
	var birth = document.getElementById("birth").value;
	var address = document.getElementById("address").value;
	var phone = document.getElementById("phone").value;
	
	if(birth=="YYYY-MM-DD")
	{
		alert("Please Enter Your Date of Birth!");
		return false;
	}
	if(nim==""||name==""||year==""||birth==""||address==""||phone=="")
	{
		alert("Please Enter The Empty Field!");
		return false;
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
<pre><a href="mem-admCOMMENTS.php">COMMENT</a>   <a href="mem-admBIODATA.php">BIODATA</a>  <a href="mem-admSETTINGS.php">SETTINGS</a>  <a href="mem-admADDMEMBER.php"class="current_page_item">ADD MEMBER</a>  <a href="mem-admLOGOUT.php">LOGOUT</a>		  </pre>
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

</head>

<body>
<!-- PHP Fetcher Start -->

<!-- PHP Fetcher End -->
<div id="main">
<form method="post" id="register" name="register" action="feature/insertuser.php" onsubmit="return checkField();">
	<table width="500" border="0" align="left" class="m_container" name="m_container" cellpadding="20%">
<tr>
        	<td>
            	<table width="500" border="0" class="s_container" name="s_container">
<tr>
                    	<th class="header" colspan="3"><h2><strong>Add Member's Data</strong></h2></th>
                  </tr>                  
                    <tr>
                    	<td width="190" class="field">USERNAME</td>
                      <td width="15"><div align="left">:</div></td>
                      <td width="281" class="enter"><input type="text" id="username" name="username"></td>
                  </tr>
                  
                    <tr>
                    	<td width="190" class="field">Name</td>
                      <td width="15"><div align="left">:</div></td>
                      <td width="281" class="enter"><input type="text" id="name" name="name"></td>                  
                    </tr>
                    
                    <tr>
                    	<td class="field">Password</td>
                        <td><div align="left">:</div></td>
                        <td class="enter"><input type="text" id="password" name="password" readonly="readonly" value="iup-polke"></td>
                  </tr>                     
                    <tr>
                    	<td width="190" class="field">Year</td>
                      <td width="15"><div align="left">:</div></td>
                      <td width="281" class="enter"><input type="text" id="year" name="year"></td>
                    </tr>
                    <tr>
                    	
	        <td width="190" class="field">Date Of Birth</td>
	        <td width="15"><div align="left">:</div></td>
	        <td width="281" class="enter"><input type="text" id="birth" name="birth" value="YYYY-MM-DD"/></td>
	        </tr>
	      <tr>
	        <td class="field">Motto</td>
	        <td><div align="left">:</div></td>
	        <td class="enter"><input type="text" id="motto" name="motto"/></td>
	        </tr>
	      <tr>
	        <td width="190" class="field">Address</td>
	        <td width="15"><div align="left">:</div></td>
	        <td width="281" class="enter"><input type="text" id="address" name="address" /></td>
	        </tr>
	      <tr>
	        <td width="190" class="field">Phone</td>
	        <td width="15"><div align="left">:</div></td>
	        <td width="281" class="enter"><input type="text" id="phone" name="phone" /></td>
	        </tr>
	      <tr>
	        <td width="190" class="field">Email</td>
	        <td width="15"><div align="left">:</div></td>
	        <td width="281" class="enter"><input type="text" id="email" name="email" /></td>
	        </tr>
	        <td colspan="2" align="center">&nbsp;</td>
	        <td align="left"><input name="Submit2" type="submit" value="Save" width="100" height="50" />
	          <input name="Clear2" type="reset" value="Clear" width="100" height="50" /></td>
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
