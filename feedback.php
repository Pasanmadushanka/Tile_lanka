<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>feed back</title>
</head>

<body>


<?php
// declare variables
$server='localhost';
$user='root';
$password="";
$database="tile_lanka"; 
$msg="";
$conn=mysqli_connect($server,$user,$password,$database);// connect to database
?>

<?php
//declare variables 
$name=$subject=$email=$message="";
$nameerr=$subjecterr=$emailerr= $messageerr="";
$test=0;
/*Get decissions for handdle errors*/
if ($_SERVER['REQUEST_METHOD']== 'POST')
{

      if (empty($_POST['txtname']))// Check name is empty

      {
	    $nameerr= "You must insert your name";$test=1;
	  }
	  else
	  {
		
		if (!preg_match ('/^[a-z A-Z]*$/', $_POST['txtname']))// only give permission to type letters and spaces
		{
			 $nameerr= "You must only enter letters";$test=1;
			 
			}
	  else
	  {
		  $name= validation( $_POST['txtname']);
		  }
	  
	  }
	  
	  
	 
	  
	
	 if (empty($_POST['txtemail']))// Check email is empty

    {
	   $emailerr  = "You must insert Email for send message";$test=1;
	}
	else
	{
	   
	   
	   if (!filter_var ($_POST['txtemail'], FILTER_VALIDATE_EMAIL))// check emails validity
	   {
		   $emailerr  = "Invalid Email. please try again!";$test=1;
		   }
		   else
		   {
			   $email= validation($_POST['txtemail']);
			   }
    }

 if (empty($_POST['txtmessage']))// Check message is empty

      {
	    $messageerr= "You must type a message for send";$test=1;
	  }
			else
			{
			$message= validation($_POST['txtmessage']);
	  }
}
//functions for check validation
function validation ($value)
{       
        $value = trim ($value);
        $value =htmlspecialchars ($value);
		$value =stripcslashes ($value);
		return $value;
	
	}

?>



<center>
<br />
<br />
<br />
<h2> CONTACT US </h4>

<!--Form for inquiry-->
<form method="post">
<br />
<table style="font-size:15px;">
    
    <tr>
    <td>Your name &nbsp;</td>
<td><input type="text" name="txtname" size="40" style=" color: #000;"/></td>    
 <td> <span style="color: #000">*<?php echo $nameerr; ?></span></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
     <tr>
    <td>Subject&nbsp; </td>
    <td><input name="txtsubject" type="text" size="40" style=" color: #000;"/></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
     <tr>
    <td>Email&nbsp; </td>
    <td><input name="txtemail" type="text" size="40" style=" color: #000;"/></td>
    <td><span style="color:#000">* <?php echo $emailerr; ?></span></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
    <td>Message&nbsp; </td>
    <td><textarea id="message" input type="text" name="txtmessage" rows="7" cols="40" style=" color: #000;"/> </textarea></td>
    <td><span style="color:#000">* <?php echo $messageerr ?></span></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
    <td></td>
    <td align="center"> <input type="submit" name="insert" value="Submit"/>
     <input type= "reset" value="Reset"/></center> </td>
    </tr>
</table>
</form>
<?php
if($_POST) {
//declare variables for inputs	
$email=$_POST['txtemail'];
$name=$_POST['txtname'];
$subject=$_POST['txtsubject'];
$message=$_POST['txtmessage'];
$sql="";
//check validity of enetring deatils
if($test==0){
if (isset($_POST['insert'])){
	$sql="INSERT INTO inquiry VALUES(NULL,'".$name."','".$subject."','".$email."','".$message."')";// insert data to inquiry table in database
	if(mysqli_query($conn,$sql))
	{
     $msg= "your message send successfully";
	 }
      else
	  {
     $msg="Error:".mysqli_error($conn);// show error message
	  }
}
}
}
?>
<br /><br />
<h4> Email: TileLAnka@gmail.com</h4>
<h4> Telephone Number: 0113452678</h4>
<h4> Fax: 0112345678</h4>
<span style="color: #333;"><?php echo $msg; ?> </span>
<!--t0 show message-->

<br /><br /><br /><br /><br />
</body>
</html>