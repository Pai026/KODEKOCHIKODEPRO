<?php
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","app");
	$result = mysqli_query($conn,"SELECT * FROM driver WHERE DID='".$_POST['DID']."'AND Dpass ='".$_POST['Dpass']."'");
	$count = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid Username or Password!";
	} else {
		echo "You are successfully logged in !";
	}
}
?>