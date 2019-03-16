<?php
$conn=mysqli_connect("localhost","root","","app");
	$result=mysqli_query($conn,"SELECT * FROM in_patient WHERE IPID='".$_POST["IPID"]."' AND IPpass='".$_POST["IPpass"]."'");
if(count($_POST)>0) 
{	
	$count = mysqli_num_rows($result);
	if($count==0)
	{ 	echo "INVALID CREDENTIALS";
	}
	else
	{
		echo"You are successfully authenticated!";
		echo "<br>";
		$result1=mysqli_query($conn,"SELECT * FROM hospital");
		while($row=mysqli_fetch_assoc($result1))
		{
			echo "HOSPITAL NAME:" . $row["Hospital_name"]."AVAILABLE ROOMS:" . $row["No_rooms"]." COST OF ROOMS:" .$row["Cost"]." "."<br>";
		}

	}
}
?>