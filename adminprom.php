<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>promotions modification</title>
<link rel="stylesheet" type="text/css" href="designadmin.css" />

</head>

<body>
<!--Link with pages-->
<p><a href="updatingpw.php" class="but1">|change password |</a> 
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
<br />
<center>
<h3>Promotions modification</h3><br /><br /><br />


<?php
//declare variables
$server='localhost';
$user='root';
$password="";
$database="tile_lanka";
$msg="";
$disid="";
$disprom="";

$conn=mysqli_connect($server,$user,$password,$database);// connect to database
?>
<!--Form for moadify promotions-->
<form method="post">
<table>
<tr>
<td>ID </td> 
<td> <input type="text" name="txtid" value="<?php echo $disid; ?>"/></td>
</tr>
<tr>
<td>Promotion</td> 
<td> <input type="text" name="txtprom" value="<?php echo $disprom; ?>"/></td>
</tr>
<tr>
<td align="center"><input type="submit" name="select" value="select" />
    <input type="submit" name="Insert" value="Insert"/></td>
<td align="center"><input type="submit" name="Update" value="Update"/>
    <input type="submit" name="Delete" value="Delete"/></td>
</tr>
</table>
</form>

<?php
if($_POST)
{
//Declare variable for inputs
$promid=$_POST['txtid'];
$promotion=$_POST['txtprom'];


$sql="";
/*Get decissions for insert,delete, update or select*/
if (isset($_POST['Insert']))
{
				 
$sql="INSERT INTO promotion VALUES('".$promid."','".$promotion."')";// Insert data to promotion table
    if(mysqli_query($conn,$sql))
     $msg= "1 row inserted successfully";
else 
     $msg="Error:".mysqli_error($conn); 
}

else if (isset ($_POST ['Update'])){
			 
$sql="UPDATE Promotion SET promotion='".$promotion."' where Promotionid=".$promid."";// update data in promotion table
	if(mysqli_query($conn,$sql))
	$msg="update row successfully";
	else
	$msg="Error : " .mysqli_error($conn);
}

else if(isset ($_POST ['Delete']))
{
$sql="DELETE FROM promotion where Promotionid=".$promid."";// delete data in promotion table
	if(mysqli_query($conn,$sql))
	$msg="delete row successfully";
	else
	$msg="Error : " .mysqli_error($conn);// Give error message if something wrong
}
 else if (isset($_POST['select'])){
$sql="SELECT * FROM promotion WHERE Promotionid='".$promid."'";// select data from promotion table
$result = mysqli_query ($conn,$sql);

if (mysqli_num_rows ($result)>0){
	echo "<table align='center'><tr><td width='60'>promotion ID </td><td width= 280>Promotion</td>  </tr>";
	
	while ($row=mysqli_fetch_array($result, MYSQLI_NUM))
	
	echo "<b><tr><td width='60' align='center'>". $row [0]."</td><td width='280' align='center'>". $row [1]."</td></tr><b>";
	echo "</table>";//Give out put for given ID
}
else {
	echo "<b> Not found <b> <br>";	
}
	
}
}

?>

<span style="color: #09F"><?php echo $msg; ?>
</span>

</body>
</html>