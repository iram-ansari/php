<?php
$a=$_POST['opass'];
$b=$_POST['npass'];
$c=$_POST['cpass'];

session_start();
$sesid=$_SESSION['user'];
$conn=mysqli_connect("localhost","root","","php2024db");
$sel="select * from register where email='$sesid'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['password']==$a)
{
    if($b=$c)
    {
        $up="update register set password='$b' where email='$sesid'";
        if(mysqli_query($conn,$up))
        {
            //header("location:login.php");
            echo"<script>window.location.href='login.php';alert('password change');</script>";
        }
        else{
            echo"password not change";
        }
    }
    else{
        echo "new and conf pass not match";
    }

}
else
{
    echo "old pass not match";
}
?>