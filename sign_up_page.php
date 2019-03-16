<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

$conn = new \MySQLi($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO outpatient (OPname,OPphno,OPemail,OPaddress,OPpass,HID) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("sisssi", $_POST['OPname'], $_POST['OPphno'], $_POST['OPemail'], $_POST['OPaddress'],$_POST['OPpass'],$_POST['HID']);
$stmt->execute();

echo"Signup successful";
header ("Location:/wordpress");
$stmt->close();
$conn->close();
?>