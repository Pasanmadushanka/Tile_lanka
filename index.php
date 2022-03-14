<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />

<title>Tile lanka</title>
</head>

<body>
<br /><h><a href="https://www.facebook.com/Lanka-Tile-491091511058543/timeline/"><img src="2000px-Facebook.svg.png"/ width=80 hight=10"/></a><br>
</h>
<br />
<div class="container">
  <div class="content">
 <center>  <a href="index.php?page=Home">  <img src="bn.png"/ width="1000px;"; hight="auto;">  </a> </center>
    
<font size="5" >
<center>
<!--Link pages with masterpage-->
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php?page=Home"> Home </a> |
<a href="index.php?page=shop"> Shop </a> |
<a href="index.php?page=order">  Order </a> |
<a href="index.php?page=feedback"> Feed Back </a> |
<a href="index.php?page=aboutus"> About Us </a> |
<a href="index.php?page=location"> Locations </a> |
<a href="index.php?page=tilelankapromotions">Promotion </a>
</center>
</font>

<?php
// set home page to show when go to the website
if (isset ($_GET['page']))
{
	include ($_GET['page'].'.php');
	}
else 
include ('Home.php');
?>
<!--code for footer area-->
<div id="footer"> 
  <p><center> Copyrights © 2015 Tile lanka . All Rights Reserved </center>
</p>
</div>


</body>
</html>