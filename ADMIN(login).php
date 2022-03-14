<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kitchen tiles modification</title>
<link rel="stylesheet" type="text/css" href="style.css" /> <!--lik with style.css-->
</head>

<body>


<?php
/*declare variables*/
$server='localhost';
$user='root';
$password="";
$database="tile_lanka";
$msg="";

$conn=mysqli_connect($server,$user,$password,$database);// connect to database


?>
<br /><br><br /><br /><br>
<h1 align="center"> Admin login </h1><br /><br /><br>
<center><br />please enter your password and user name to login to the admin panel<br /><br /><br> </center>
<form method="post"> <!--Form for login-->
<div>
<table align="center"  style="font-size:18px;">
<tr>
<td> User name&nbsp;&nbsp; </td>
<td> <input type="text" name="txtuser" style="font-size:14px;" /> </td>

</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td> Password&nbsp;&nbsp; </td>
<td> <input type="password" name="txtpass"style="font-size:14px;" /> </td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td></td>
<td><input type="submit" name="login" value="LOGIN" style="font-size:12px;"  /></td>
</tr>
</table>
</form>
</div>





<?php

if(isset($_POST['login']))
{
$sql="";
	
//declare variables for inputs
$username=$_POST['txtuser'];
$password=$_POST['txtpass'];

	$sql="SELECT * FROM administrator where username='".$username ."'&& password='".$password."'" ;// Select correct username and password from database 
	$result = mysqli_query ($conn,$sql);
	if (mysqli_num_rows ($result)>0){
	
	while ($row=mysqli_fetch_array($result, MYSQLI_NUM))
	
	header ("Location: admin.php"); // Go to admin page if password and username correct
	
}
else {
	echo "<b> <center> Your password or username incorrect please tryagain!! </center> <b> <br>";	
}
	
 }

	?>


</body>
</html>