<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "app";

$conn =new \MySQLi($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn_error);
}

$stmt = $conn->prepare("INSERT INTO hospital (Hospital_name,Haddress,Hphno,HID,Hpass,No_rooms,Cost) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("ssiisii", $_POST['Hospital_name'], $_POST['Haddress'],$_POST['Hphone'],$_POST['HID'],$_POST['Pass'],$_POST['No_rooms'],$_POST['Cost']);
$stmt->execute();

echo "signup successfull";
header ("Location:/wordpress");
$stmt->close();
$conn->close();
?>

	