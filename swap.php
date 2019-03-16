<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="app";
$conn=new \MySQLi($servername,$username,$password,$dbname);
if($conn->connect_error)
{	die("connection failed:".$conn_error);
}
$OPID=$_POST['OPID'];
$result=mysqli_query($conn,"SELECT OPID,OPname,OPemail,OPaddress,OPphno,OPpass,HID FROM outpatient WHERE OPID=$OPID");

if(!isset($_POST['discharge']))
{
while($row=mysqli_fetch_assoc($result)){
$OP=$row["OPID"];
echo $OP;
$OPN= $row["OPname"];
echo $OPN;
$OPNO= $row["OPphno"];
echo $OPNO;
$OPem= $row["OPemail"];
echo $OPem;
$OPad= $row["OPaddress"];
echo $OPad;
$OPpa= $row["OPpass"];
$Ohi= $row["HID"];
echo $OPpa;

$DID=$_POST['DID'];
	mysqli_query($conn,"INSERT INTO in_patient(IPID,IPname,IPphno,IPemail,IPaddress,IPpass,HID,DrID)VALUES($OP,'$OPN',$OPNO, '$OPem','$OPad','$OPpa',$Ohi,$DID)");
mysqli_query($conn,"UPDATE hospital set No_rooms=No_rooms-1 where HID=$Ohi");
mysqli_query($conn,"UPDATE outpatient set DID=$DID");
}
}
else
{	while($row=mysqli_fetch_assoc($result)){
	$Ohi=$row["HID"];
	mysqli_query($conn,"DELETE FROM in_patient WHERE IPID=$OPID");
	mysqli_query($conn,"UPDATE hospital set No_rooms=No_rooms+1 where HID=$Ohi");
	}
}
mysqli_close($conn);
?>