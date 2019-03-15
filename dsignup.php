<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

$conn = new \MySQLi($servername,$username,$password,$dbname);

if($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO driver (Dname,LNO,Dpass,Dphno,Vno) VALUES (?,?,?,?,?)");
$stmt->bind_param("sisis", $_POST['Dname'],$_POST['LNO'],$_POST['Dpass'],$_POST['Dphno'],$_POST['Vno']);
$stmt->execute();

echo "Signup Successfull";
$stmt->close();
$conn->close();
?>
