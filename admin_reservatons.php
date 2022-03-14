<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kitchen tiles modification</title>
  <link rel="stylesheet" type="text/css" href="designadmin.css" /><!--Link with designadmin.css-->
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
<center>
<br />
<h3>Searching reservation details</h3>
<?php
/*Declare variables*/
$server='localhost';
$user='root';
$password="";
$database="tile_lanka";
$msg="";
$disname="";
$disID="";
$disprice="";
$distp="";
$distype="";
$disdate="";
$dissize="";
$disaddress="";
$disquan="";
$conn=mysqli_connect($server,$user,$password,$database);// Connect to datbase
?>
<center><br /><br /><br />
<br /><br /><br />
Type reservation ID for get details<br /><br />
<span> <?php echo $msg; ?></span>
<!-- Form for get orders' details-->
<form method="post">
<table>
<tr>
<td> </td> 
<td> <input type="text" name="ID" value="<?php echo $disID; ?>"/></td>

<td> <input type="submit" name="select" value="Search"/></td></tr>
</table>
</form>
</center>
<?php
if($_POST)
{
$orderid=$_POST['ID'];
$sql="";

if (isset($_POST['select'])){
$sql="SELECT * FROM addtocart WHERE orderid='".$orderid."'"; //select details from database for given ID
$result = mysqli_query ($conn,$sql);

if (mysqli_num_rows ($result)>0){
	
	while ($row=mysqli_fetch_array($result, MYSQLI_NUM))
	
	echo " Customer name: ". $row [1]."<br> Product name: ". $row [2]. " <br> Size: ". $row [3]. " <br> Type: ". $row [4]."<br> Quantity: ". $row [5]."<br> date: ".$row [6]." <br> Address: ".$row [7]."<br> Telephone number: ".$row [8]."<br> Email : ".$row [8]."<b>"; //give out put for selected ID
	
	
}
else {
	echo "<b> Not found <b> <br>";	
}
	
 }
}
?>
<?php
echo "<br><br><b style='color:#0CF'>All reservations </b><br><br>";
$conn= mysqli_connect ($server,$user,$password,$database);
$sql="SELECT * FROM addtocart"; // Retrieve all data from addtocart table
$result = mysqli_query ($conn,$sql);

if (mysqli_num_rows ($result)>0){
	echo "<table>";
	echo "<tr><td width='100'>OrderID </td><td width= 280>Customer name </td>  </tr>";
	
	while ($row=mysqli_fetch_array($result, MYSQLI_NUM))
	
	echo "<b style='color:#09F'><center><tr><td width='100'>". $row [0]."<td width= 280>". $row [1]."</td></tr><b>";
	
}
else {
	echo "<b> Not found <b> <br>";	
}
echo "</table>";

	?>


<span style="color: #09F"><?php echo $msg; ?>
</span>



</body>
</html>