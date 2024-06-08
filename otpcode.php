<?php

$a=$_POST['otp'];
session_start();
$sesid=$_SESSION['user'];
$conn=mysqli_connect("localhost","root","","php2024db");

$sel="select * from register where email='$sesid'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['otp']==$a)
{
    header("location:change_pass.php");
}
else{
    echo "otp not match";
}








?>