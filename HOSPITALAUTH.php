<?php
if(count($_POST)>0)
{	$conn=mysqli_connect("localhost","root","","app");
	$result=mysqli_query($conn,"SELECT * FROM hospital WHERE HID='".$_POST["HID"]."' AND Hpass='".$_POST["Hpass"]."'");
	$count= mysqli_num_rows($result);
	if($count==0)
	{
		echo "INVALID CREDENTIALS";
	}
	else
	{
		echo"You are successfully authenticated!";
	}
}
?>