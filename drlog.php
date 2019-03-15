<?php
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","app");
	$result = mysqli_query($conn,"SELECT * FROM doctor WHERE DrID='".$_POST['DrID']."'AND Drpass = '".$_POST['Drpass']."'");
 	$count = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid Username or Password!";
	} else {
		echo "You are successfully authenticated!";
	}
}
?>