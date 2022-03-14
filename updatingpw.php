<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Living room tiles modification</title>
  <link rel="stylesheet" type="text/css" href="designadmin.css" />
</head>
<body>
<!--link with pages-->
<p><a href="updatingpw.php" class="but1">|change password</a>|
<a href="index.php?page=ADMIN(login)">Logout | </a></p>
 <center>  <img src="bn.png"/>  </center>
<div class="container">
  <div class="content">
<div align="center">																																				
				<a href="admin.php" class="but1">Barthroom tiles</a>|
                <a href="adminkitchentiles.php" class="but2">Kitchen tiles </a>|
                <a href="adminlivingroom.php" class="but3">Living room tiles</a>|
                <a href="adminotherdesign.php" class="but4">Our designs</a>|
				<a href="admin_reservatons.php" class="but5">Reservation detials</a>|
				<a href="adminmessages.php" class="but6">Inquiries</a>
                <a href="adminprom.php" class="but4">Promotions</a>|

</div>
</div>
</div>
<center>
<br />
<h3>Change the password</h3>
<?php
//declare variables
$server='localhost';
$user='root';
$password="";
$database="tile_lanka";
$msg="";

$conn=mysqli_connect($server,$user,$password,$database);// connect to the database



?>
<!--form for change the password-->
<form method="post">
<div>
<table align="center" >
<tr>
<td> Username </td>
<td> <input type="text" name="txtusername" /> </td>
</tr>

<tr>
<td> New Password </td>
<td> <input type="password" name="txtpass"/> </td>
</tr>

<tr>

<td> <input type="submit" name= "Update" value="confirm"  /></td>
</tr>
</table>
</div>
<center><br /> <h3><b>please enter your username and new password for change the password </b></h3></center>
</form>

<?php
//update the administrator table
if (isset ($_POST ['Update'])){
$sql="";
$username=$_POST['txtusername'];
$password=$_POST['txtpass'];			 
$sql="UPDATE administrator SET password='".$password."' where username='".$username."'";
	if(mysqli_query($conn,$sql))
	$msg="Your password changed successfully";
	else
	$msg="Error : " .mysqli_error($conn);
}

?>
<span style="color: #09F"><?php echo $msg; ?>
<!--to show message-->
</body>
</html>