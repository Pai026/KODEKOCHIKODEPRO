<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "app";

$conn =new \MySQLi($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn_error);
}

$stmt = $conn->prepare("INSERT INTO hospital (Hospital_name,Haddress,Hphno,Hpass) VALUES (?,?,?,?)");
$stmt->bind_param("ssis", $_POST['Hospital_name'], $_POST['Haddress'],$_POST['Hphone'],$_POST['Pass']);
$stmt->execute();

echo "signup successfull";
header ("Location:/wordpress" );
$stmt->close();
$conn->close();
?>

	
