<?php
if(count($_POST)>0)
{
	$conn = mysqli_connect("localhost","root","","app");
	$result = mysqli_query($conn,"SELECT * from outpatient WHERE OPID='".$_POST["OPID"]."' AND OPpass = '".$_POST["OPpass"]."'");
 	$count = mysqli_num_rows($result);
	if($count==0)
	{
		echo "Invalid Username or Password!";
	}
	else
	{
		header ("Location:/wordpress/trial3.html");

	}
}
?>