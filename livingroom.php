<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<br /><br /><br /><br />
<div align="left">
<div class="container">
  <div class="btn-group">
  <!--drop down buttons-->
    <button class="btn btn-default dropdown-toggle btn-lg" type="button" id="menu1" data-toggle="dropdown">Tile categories
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="index.php?page=livingroom"> Living room </a></li>
      <li><a href="index.php?page=kitchen"> Kitchen </a></li>
      <li><a href="index.php?page=bathrooms"> Bathrooms </a></li>
       <li><a href="index.php?page=ourdesigns"> Our Design </a></li>
    </ul>
  </div>
</div>
</div>

<div><table>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td>

<?php
//declare variables
$server='localhost';
$user='root';
$password="";
$database="tile_lanka";

$conn= mysqli_connect ($server,$user,$password,$database);// connect to database

?>
<div >
		<br /><br /><b>&nbsp;&nbsp;&nbsp;&nbsp;Type&nbsp;&nbsp; Size </b></font>     </h1>
        <!--form for select options for search-->
         <form method="post" style="font-size:16px;">
         <select name="type">
         <option ></option>
         <option>wood</option>
         <option>Ceremic</option>
         <option>marble</option>
         <option>stone</option>
         </select> 
                        
         <select name="size">
         <option ></option>
         <option></option>
         <option>6x6</option>
         <option>12x12</option>
         <option>16x8</option>
         <option>20x20</option>
         <option>40x40</option>
         <option>60x60</option>
         </select>
                         
                        
        <input type="submit" name="submit" value="search" style="font-size:12px;"/> 
                         
                           </form>
 </div>
 <br /><br />
<?php
	if(isset($_POST['submit']))
	{   
	    // declare variables for options
		$t=$_POST['type'];
		$s=$_POST['size'];
		$sql = "SELECT * FROM livingroom where type='".$t."' AND size='".$s."'" ;//select data from livingroom table
		$result = mysqli_query($conn,$sql);//declare variable for results
		  if (mysqli_num_rows($result)>0)
			{
					while ($row = mysqli_fetch_array($result,MYSQLI_NUM))
				   {
	                  echo"<b style='color:#09F'><center>Searching results</center></b>";						   
	                  echo "<b><img src=data:image;base64,". $row[5]." width= 120 height=120/><br> Name: ". $row [2]." <br> Type: ". $row [1]."<br> size: ". $row [3]. "<br> prize_$: ". $row [4].  "<b><br><br>";// code for show output
	              
				   }    
		    }
		 else
		   {
			 echo"<b style='color: Red'><center>Not found '".$s."'  size '".$t."'  tiles</center></b> ";
		   }
	}
?>
<h1 style="color:#0CF;">Livingroom Tiles</h1>
<?php

$sql="SELECT * FROM livingroom";// select all data from  livingroom table
$result = mysqli_query ($conn,$sql);
$rowClose=false;
$count=0;//declare variable count
if (mysqli_num_rows($result)>0){
echo "<table>";
//to show data in the tablle
	while ($row=mysqli_fetch_array ($result, MYSQLI_NUM)){


    if ($count==0){
				echo "<tr>";
	}
    if ($count==2){
		$count=0;
		$rowClose=true;
	}
	if($count<4)	
	 
	{
 echo "<b><td width='1000'><img src=data:image;base64,". $row[5]." width= 120 height=120/><br> Name: ". $row [2]." <br> Type: ". $row [1]."<br> size: ". $row [3]. "<br> prize_$: ". $row [4].  "</td><b>";
	}
	
	$count++;
   
    if($rowClose)
    {
	echo "</tr>";
	$rowClose=false;
	$count=0;

	}	
	}
	}


else {
	echo "<b> Not found ".mysqli_error($conn)." <b> <br>";	
}
	
echo "</table>";

?>
</td>
</tr>
</table>

<br /><br /><br /><br /><br /><br />
</body>
</html>