<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

$conn = new \MySQLi($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO trafficcontroller (State,Email_ID,Tpass) VALUES (?, ?, ?)");
$stmt->bind_param("sss",$_POST['State'],$_POST['Email_ID'],$_POST['Tpass']);
$stmt->execute();

echo "Signup Successful";
$stmt->close();
$conn->close();
?>