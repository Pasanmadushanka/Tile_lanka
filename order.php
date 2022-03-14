<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tilelanka products Ordering</title>
	
</head>

<body>
<?php
//Declare variaables 
$server='localhost';
$user='root';
$password="";
$database="tile_lanka";
$msg="";

$conn=mysqli_connect($server,$user,$password,$database);// connect to database
$nameerr=$producterr=$tperr=$addresserr=$typeerr=$sizeerr=$dateerr=$quantityerr=$mailerr=$categoryerr="";// declare variables for show errors
?>

<?php
$test=0;
//test errors
if ($_SERVER['REQUEST_METHOD']== 'POST')
{

      if (empty($_POST['txtname']))// test name is empty

      {
	    $nameerr= "You must insert your name";$test=1;
	  }
	  else
	  {
		
		if (!preg_match ('/^[a-z A-Z]*$/', $_POST['txtname']))// test only write letters and spaces
		{
			 $nameerr= "You must only enter letters";$test=1;
			 
			}
	  else
	  {
		  $name= validation( $_POST['txtname']);
		  }
	  
	  }
	   if (empty($_POST['tp']))// test telephone number is empty

      {
	    $tperr= "You must type your contact number";$test=1;
	  }
	  else
	  {
		
		if (!preg_match ('/^[0-9]*$/', $_POST['tp']))// check only type numbers
		{
			 $tperr= "You must only enter number";$test=1;
			 
			}
	  else
	  {
		  $tp= validation( $_POST['tp']);
		  }
	  
	  }
	  
	  
	 
	  
	
	 if (empty($_POST['txtproduct']))// check product colomn is empty

     {
	    $producterr= "You must type a product name for reserve order";$test=1;
	  }
			else
			{
			$product= validation ($_POST['txtproduct']);
	  }
  

 if (empty($_POST['txttype']))// check type is empty

      {
	    $typeerr= "You must select a type for reserve order";$test=1;
	  }
			else
			{
			$itype= validation ($_POST['txttype']);
	  }



 if (empty($_POST['size']))// check size is empty

      {
	    $sizeerr= "You must select a size for reserve order";$test==1;
	  }
			else
			{
			$size= validation ($_POST['size']);
	  }



 if (empty($_POST['txtaddress']))// check address is empty

      {
	    $addresserr= "You must type a address for reserve order";$test==1;
	  }
			else
			{
			$address= validation ($_POST['txtaddress']);
	  }
	  
	   if (empty($_POST['txtdate']))// check date is empty

      {
	    $dateerr= "You must type a date";$test==1;
	  }
			else
			{
			$date= validation ($_POST['txtdate']);
	  }
	  if (empty($_POST['txtcategory']))// check category is empty

      {
	    $categoryerr= "You must select category for reserve order";$test==1;
	  }
			else
			{
			$category= validation ($_POST['txtcategory']);
	  }
	   if (empty($_POST['txtquantity']))// check quantity is empty

      {
	    $quantityerr= "You must give a quantity for reserve order";$test==1;
	  }
			else
			{
			$quantity= validation ($_POST['txtquantity']);
	  }
	   if (empty($_POST['txtmail']))// check mail is empty

    {
	   $mailerr  = "You must insert Email for send message";$test=1;
	}
	else
	{
	   
	   
	   if (!filter_var ($_POST['txtmail'], FILTER_VALIDATE_EMAIL))// check mail validation
	   {
		   $mailerr  = "Invalid Email. please try again!";$test=1;
		   }
		   else
		   {
			   $email= validation($_POST['txtmail']);
			   }
    }
	
}
// function for validations
function validation ($value)
{       
        $value = trim ($value);
        $value =htmlspecialchars ($value);
		$value =stripcslashes ($value);
		return $value;
	
	}

?>


<br />
<br />
<br />
<center>
<h1> Please insert details to do reservation </h1>
<!--form for reserve order-->
<form method="post">
<table style="font-size:15px">

<tr>
<td>Customer Name&nbsp;</td>
<td><input type="text" name="txtname" style=" color: #000;"/></td>
<td> <span style="color: #000">*<?php echo $nameerr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>Category&nbsp;</td>
<td style=" color: #000;"><select name="txtcategory">
<option></option>
<option>bathroom tiles</option>
<option>kitchen tiles</option>
<option>livingroom tiles</option>
<option>our designs</option>
</select></td>

<td> <span style="color: #000">*<?php echo $categoryerr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>Product Name&nbsp;</td>
<td><input type="text" name="txtproduct"  style=" color: #000;"/></td>
<td> <span style="color: #000">*<?php echo $producterr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>type&nbsp;</td>
<td  style=" color: #000;"><select name="txttype">
<option></option>
<option>wood</option>
<option>Ceremic</option>
<option>marble</option>
<option>stone</option>
</select></td>
<td> <span style="color: #000">*<?php echo $typeerr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>Size&nbsp;</td>
<td style=" color: #000;"><select name="size">
<option></option>
<option>6x6</option>
<option>12x12</option>
<option>15x15</option>
<option>30x30</option>
<option>40x40</option>
<option>60x60</option>
</select>
<td> <span style="color: #000">*<?php echo $sizeerr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>Quantity&nbsp;</td>
<td><input type="text" name="txtquantity"  style=" color: #000;" /></td>
<td> <span style="color: #000">*<?php echo $quantityerr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>Date&nbsp;</td>
<td><input type="text" name="txtdate"  style=" color: #000;"/></td>
<td> <span style="color: #000">*<?php echo $dateerr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<td>Address&nbsp;</td>
<td><input type="text" name="txtaddress"  style=" color: #000;"/></td>
<td> <span style="color: #000">*<?php echo $addresserr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>Contact Number&nbsp;</td>
<td><input type="text" name="tp"  style=" color: #000;"/></td>
<td> <span style="color: #000">*<?php echo $tperr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>E-Mail</td>
<td><input type="text" name="txtmail" style=" color: #000;" /></td>
<td> <span style="color: #000">*<?php echo $mailerr; ?></span></td>
</tr>
<tr><td>&nbsp;</td></tr>
<td></td>
<td align="center">
    <input type="submit" name="Insert" value="Confirm"/>
    <input type="reset" value="cancel" />
    </td>

</table>
</form>
</center>
<?php
if($_POST)
{
//declare variables for inputs
$customername=$_POST['txtname'];
$type=$_POST['txttype'];
$size=$_POST['size'];
$date=$_POST['txtdate'];
$quantity=$_POST['txtquantity'];
$address=$_POST['txtaddress'];
$tp=$_POST['tp'];
$product=$_POST['txtproduct'];
$email=$_POST['txtmail'];
$category=$_POST['txtcategory'];

$sql="";
// check inputs validity
if($test==0){
if(isset ($_POST['Insert']))
{
	$sql="INSERT INTO addtocart VALUES (NULL,'".$customername."','".$category."','".$type."','".$product."','".$size."','".$quantity."','".$date."','".$address."','".$tp."','".$email."')";/// insert values to the addtocart table
	if(mysqli_query($conn,$sql))
	$msg="<center> your order successfully reserved. And we will diliver your order on needed date </center>";
	else
	
	$msg="Error : " .mysqli_error($conn);
}
}
}
?>
<span style="color:#03f"><?php echo $msg; ?>
</span><!--to show messages-->
<br /><br /><br /><br /><br />
</body>
</html>