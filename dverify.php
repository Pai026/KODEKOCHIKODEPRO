<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="app";
$conn=new \MySQLi($servername,$username,$password,$dbname);
if($conn->connect_error)
{	die("connection failed:".$conn_error);
}
echo "VERIFICATION MAIL SEND";
$email=$_POST['Demail'];
$sql=" SELECT DID FROM driver WHERE Demail='$email'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) {
 $msg = " DID: " . $row["DID"];
} ;
$to=$_POST['Email_ID'];
$subject = "password update request";
$msg= wordwrap($msg,70);
$headers= "MIME-Version:1.0"."\r\n";
$headers .= 'From: amalac36@gmail.com' . "\r\n";
mail($to,$subject,$msg,$headers);
header ("Location:/wordpress");
?>