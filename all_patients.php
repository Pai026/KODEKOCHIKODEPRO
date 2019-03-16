
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

$conn = new \MySQLi($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$result=mysqli_query($conn,"SELECT IPID,IPname FROM in_patient");
while($row=mysqli_fetch_assoc($result)){
echo "id:" . $row["IPID"]."-Name:" . $row["IPname"]." "."<br>";
}
mysqli_close($conn);
?>