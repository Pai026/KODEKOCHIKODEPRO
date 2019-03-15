<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="app";
$conn=new \MySQLi($servername,$username,$password,$dbname);
if( $conn->connect_error)
{	die("connection failed: ". $conn_error);
}
$pass=$_POST['PASS'];
$email=$_POST['email'];
mysqli_query($conn,"UPDATE in_patient SET IPpass='$pass' WHERE IPemail='$email'");
$conn->close();
?>