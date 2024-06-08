<?php
session_start();
$a=$_POST['email'];
$b=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","php2024db");
$sel="select * from register where email='$a'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
    
if(!empty($k))
{
if($k['email']==$a){
    if($k['password']==$b)
    {
        $_SESSION['user']=$a;
        header("location:dashbord.php");

    }else{
        echo "password not match";
    }
}
else{
    echo "email id wrong";
}
}else{
    echo"data not fetch";
}
?>