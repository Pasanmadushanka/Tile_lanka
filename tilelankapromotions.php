<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>promotions</title>
</head>

<?php
$server='localhost';
$user='root';
$password="";
$database="tile_lanka";
$msg="";
$disID="";


$conn=mysqli_connect($server,$user,$password,$database);

?>


<?php
echo "<br><br><center><b><h1>Promotions</h1></b><br><br></center>";
$conn= mysqli_connect ($server,$user,$password,$database);
$sql="SELECT * FROM promotion";
$result = mysqli_query ($conn,$sql);

if (mysqli_num_rows ($result)>0){
	echo "<center><table>";
	
	
	while ($row=mysqli_fetch_array($result, MYSQLI_NUM))
	
	echo "<b><tr height='60'><td width='500' align='center'>". $row [1]."</td></tr><b>";
	
}
else {
	echo "<b> Not found <b> <br>";	
}
echo "</table></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

	?>
<span style="color:#333"><?php echo $msg; ?>
</span>

</body>
</html>