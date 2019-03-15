<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="app";
$conn=new \MySQLi($servername,$username,$password,$dbname);
if($conn->connect_error)
{	die("connection failed:".$conn_error);
}
$to=$_POST['email'];
$subject = "password update request";
$mailcontent="Trafficforgot.html" ;
$headers= "MIME-Version:1.0"."\r\n";
$headers .= 'From: amalac36@gmail.com' . "\r\n";
mail($to,$subject,$mailcontent,$headers);
?>