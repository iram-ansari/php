<?php
session_start();
$sesid=$_SESSION['user'];

if(isset($sesid)){
    session_destroy();
    header("location:login.php");
}
?>