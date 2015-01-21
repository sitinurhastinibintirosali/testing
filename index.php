<!DOCTYPE HTML>
<html>
<head>
	<!-- begin meta -->
    <meta charset="utf-8">
    <meta name="description" content="This is a simple and elegant navigation menu built with HTML5 and CSS3.">
    <meta name="keywords" content="HTML5, CSS3, navigation, navigation menu, gray">
    <meta name="author" content="Ixtendo">
	<!-- end meta -->
	
	<!-- begin CSS -->
    <link href="css1/style.css" type="text/css" rel="stylesheet">
	<link href="css1/html5-reset.css" type="text/css" rel="stylesheet">
     <link href="css1/style4.css" type="text/css" rel="stylesheet">
	<!-- end CSS -->
	
	<!-- begin JS -->
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script> 
	<script src="js/modernizr-2.0.6.min.js" type="text/javascript"></script> 
	<!-- end JS -->
	
    <title>Malaysia Website</title>
</head>

<?php
	//Initialise the session
	
	if (isset($_SESSION['username']))
	{
	//Destroy the whole session
	$_SESSION = array();
	session_destroy();
	}
?>

<body style="background: url(images1/el_bg_img_5.jpg) repeat left top;">
<!-- begin container -->
<div id="container" style="width: 1000px; margin: 100px auto 0;">

	<!-- begin navigation --><!-- end navigation -->
  <table width="100%" border="0" align="center">
  <tr>
    <th colspan="2" align="center" valign="middle" nowrap scope="col"><img src="images1/7231856234_3eac0bc29b_z.jpg" width="998" height="362"></th>
    </tr>
  <tr>
    <td width="29%" rowspan="3"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <table align="center" width="200" border="0">
      <tr>
        <td align="center"><h1><strong>Login</strong></h1></td>
      </tr>
      
      <form method="post" action="feature/login.php">
      
      <tr>
        <td align="center"><p><input name="username" type="text" size="30" placeholder="Username" id="username"/></td>
      </tr>
      <tr>
        <td align="center"><p><input name="password" type="password" size="30" placeholder="Password" id="password"/></td>
      </tr>
      <tr>
        <td align="center"><p>&nbsp;</p>
          <p>Login</p></td>
      </tr>
      <tr>
        <td align="center" valign="middle"></td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="login" value="Login" />
          <input type="reset" value="Reset"></td>
      </tr>
    </table>      <h1>&nbsp;</h1></td>
    <td colspan="2" align="left" valign="bottom"><h1>Malaysia Website</h1></td>
  </tr>
  <tr>
    <td colspan="6"><p>&nbsp;</p>
    <ul class="kwicks kwicks-horizontal kwicks-processed">
      <p><img src="logo_1malaysia.jpg" width="110" height="130"> <img src="logo_visit-malaysia.jpg" width="110" height="130"> <img src="malaysia logo.png"width="110" height="130"> <img src="large_MFest-2012-Logo-600px.png" width="110" height="130"></p></td>
    </tr>
  <tr>
    <td colspan="6" align="center" valign="middle"><nav id="navigation">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="background.php">Background</a></li>
        <li><a href="people.php">People and Culture</a></li>
        <li><a href="Other.php">Other</a></li>
        <li><a href="Festival.php">Festival</a></li>
        <li><a href="places.php">Place</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        </ul>
    </nav></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="6" rowspan="10" valign="middle"><h1>Overview</h1>
      <blockquote>
        <p align="justify">        Welcome to Malaysia, a tropical paradise endowed with breathtaking natural beauty, exotic cultures and friendly people. Made up of Peninsular Malaysia and the two states of Sabah and Sarawak on the island of Borneo, it's a destination that offers so much to see, do and experience. Malaysia is easily accessible from the major cities in the region and the rest of the world. </p>
        <p align="justify">The new state-of-the-art KL International Airport (KLIA) at Sepang serves over 40 international airlines and several domestic airlines, while Port Klang, situated about 41 km from Kuala Lumpur, the country's capital, is the main port of call for cruise liners. Malaysia is also accessible by road and rail from Thailand in the north and Singapore in the south.        </p>
        <p align="justify">As a visitor to Malaysia, you will have the opportunity to experience and appreciate its rich historic and cultural heritage, exotic culinary delights, shopping splendours, nature-based adventures, and fun-filled activities. The warm and hospitable nature of its people will make your stay in Malaysia both pleasant and enjoyable. </p>
      </blockquote></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td align="center">&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td height="352">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="7" align="center"><hr />Pemograman Internet &copy; 2014. All Right Reserved</td>
  </tr>
</table>
  <p>&nbsp;</p>
</div>
<!-- end container -->
</body>
</html>