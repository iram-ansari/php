<?php

$a=$_POST['npass'];
$b=$_POST['cpass'];


session_start();
$sesid=$_SESSION['user'];
$conn=mysqli_connect("localhost","root","","php2024db");
$sel="select * from register where email='$sesid'";
// $r=mysqli_query($conn,$sel);
// $k=mysqli_fetch_array($r,MYSQLI_BOTH);

 if($a==$b){
   $up="UPDATE `register` SET `password`='$a' WHERE email='$sesid'";
   if(mysqli_query($conn,$up))
   {
    header("location:login.php");
   }
 
 else{
    echo "password not change";
 }
}
    // ye is wale  if($a==$b) ka else hain 
  else{
    echo "new and conf pass not match";
  }

?>