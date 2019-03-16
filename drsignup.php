<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

$conn = new \MySQLi($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO doctor (Drname,Dept,Dremail,Drphno,Drpass) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssis",$_POST['Drname'],$_POST['Dept'],$_POST['Dremail'],$_POST['Drphno'],$_POST['Drpass']);
$stmt->execute();

echo "Signup Successful";
header ("Location:/wordpress");
$stmt->close();
$conn->close();
?>