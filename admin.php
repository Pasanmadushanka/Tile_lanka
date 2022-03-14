<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kitchen tiles modification</title>
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
<center>
<br />
<h3>Bathroom tiles modifications</h3>
<?php
//declare variables
$server='localhost';
$user='root';
$password="";
$database="tile_lanka";
$msg="";
$disname="";
$disID="";
$dissize="";
$disprice="";
$distype="";
$dissize="";

$conn=mysqli_connect($server,$user,$password,$database);// connect to database

if($conn)
echo "<b> <br> <br> <br>you are connected to the database<b><br>";
else
echo "<b> Not connected".mysqli_connect_error($conn)."<b><br>";
?>

<!--Form for moadify bathroom tiless-->
<form  method="post" enctype="multipart/form-data">
<table>
<tr>
<td>productID </td>
<td><input type="text" name="txtID" value="<?php echo $disID; ?>"/></td>
</tr>
<tr>
<td>Product Name</td>
<td><input type="text" name="txtname" value=" <?php echo $disname;?>"/></td>
</tr>
<tr>
<td>Type</td>
<td><select name="type">
<option></option>
<option>wood</option>
<option>Ceremic</option>
<option>marble</option>
<option>stone</option>
</select>
</td>
<td><span style="color: #000"> <?php echo $distype;?></span></td>
</tr>
<tr>
<td>Size</td>
<td><select name="txtsize">
<option></option>
<option>6x6</option>
<option>12x12</option>
<option>16x8</option>
<option>20x20</option>
<option>40x40</option>
<option>60x60</option>
</select>
</td><td><span style="color: #000"> <?php echo $dissize;?></span></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="txtprice" value=" <?php echo $disprice;?>"/></td>
</tr>
<tr>
<td> Image </td> 
<td> <input type="file" name="fileUpload" /> </td>
</tr>
<tr>
<td align="center"><input type="submit" name="select" value="select" />
    <input type="submit" name="Insert" value="Insert"/></td>
<td align="center"><input type="submit" name="Update" value="Update"/>
    <input type="submit" name="Delete" value="Delete"/></td>
</tr>
</table>

</form>


<br /><br />
Insert the values to do modifying products details in the database<br /><br />

<?php
if($_POST)
{
// declare variables for inputs	
$id=$_POST['txtID'];
$name=$_POST['txtname'];
$type=$_POST['type'];
$size=$_POST['txtsize'];
$price=$_POST['txtprice'];



$sql="";
/*Get decissions for insert,delete, update or select*/
if (isset($_POST['Insert'])){
	 $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
	if ($check !== false){
			 $image=addslashes($_FILES["fileUpload"]["tmp_name"]);
			 $image=file_get_contents($image);
			 $image=base64_encode($image);
			/*upload the image*/ 
			 
$sql="INSERT INTO bathrooms VALUES(".$id.",'".$type."','".$name."','".$size."','".$price."','".$image."')";/*insert data to database bathrooms table */
    if(mysqli_query($conn,$sql))
     $msg= "1 row inserted successfully";
else 
     $msg="Error:".mysqli_error($conn); 
}
}
else if (isset ($_POST ['Update']))
{$check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
	if ($check !== false){
			 $image=addslashes($_FILES["fileUpload"]["tmp_name"]);
			 $image=file_get_contents($image);
			 $image=base64_encode($image);
			 /*upload the image*/ 
			 
$sql="UPDATE bathrooms SET type='".$type."', productname='".$name."', size='".$size."',price='".$price."',image='".$image."' where id=".$id.""; // Update data in database bathrooms table
	if(mysqli_query($conn,$sql))
	$msg="update row successfully";
	else
	$msg="Error : " .mysqli_error($conn);
}
}
else if(isset ($_POST ['Delete']))
{
$sql="DELETE FROM bathrooms where id=".$id."";// delete data in database bathrooms table
	if(mysqli_query($conn,$sql))
	$msg="delete row successfully";
	else
	$msg="Error : " .mysqli_error($conn);
}
 else if (isset($_POST['select'])){
$sql="SELECT * FROM bathrooms WHERE id='".$id."'";// selectdata from database bathrooms table
$result = mysqli_query ($conn,$sql);

if (mysqli_num_rows ($result)>0){
	
	while ($row=mysqli_fetch_array($result, MYSQLI_NUM))
	
	echo "<b><center><img src=data:image;base64,". $row[5]." width= 120 height=120/><br> Type: ". $row [1]."<br> Name: ". $row [2]. " <br> Size: ". $row [3]. " <br> Price: ". $row [4]. "<b>"; // Code for show out put
	
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