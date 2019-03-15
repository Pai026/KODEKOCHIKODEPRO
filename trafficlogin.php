<?php
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","app");
	$result = mysqli_query($conn,"SELECT * FROM trafficcontroller WHERE TID='".$_POST['TID']."'AND Tpass ='".$_POST['Tpass']."'");
	$count = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid Username or Password!";
	} else {
		echo "You are successfully logged in !";
	}
}
?>