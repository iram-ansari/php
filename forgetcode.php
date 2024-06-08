<?php
session_start();
error_reporting(0);
$a=$_POST['email'];


$conn=mysqli_connect("localhost","root","","php2024db");

$sel="select * from register where email='$a'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

$otp=rand(1000,9999);

if($k['2']==$a)
{
    $up="update register set otp='$otp' where email='$a'";
    if(mysqli_query($conn,$up))
    {
        $_SESSION['user']=$a;
    header("location:otp.php");
    }
    else{
        echo "otp not send";
    }
}
else{
    echo "mail id not match";
}

?>