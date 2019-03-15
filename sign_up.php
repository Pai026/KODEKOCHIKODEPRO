<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

$conn = new \MySQLi($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO outpatient(OPname,OPphno,OPemail,OPaddress,OPpass) VALUES (?,?,?,?,?)");
$stmt->bind_param("sisss" , $_POST['OPname'], $_POST['OPphno'], $_POST['OPemail'], $_POST['OPaddress'], $_POST['OPpass']) ;
$stmt->execute();

echo"SIGN_UP SUCCESSFUL";
$stmt->close();
$conn->close();
?>