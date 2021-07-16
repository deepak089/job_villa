<?php

session_start();
session_destroy();
header('location:admin_login.php');

include '../php/config.php';

$sql=mysqli_query($conn,"SELECT * FROM admin WHERE admin_email='{$_SESSION['admin_email']}' AND admin_type='2'");
if($sql){
    header("location:../index.php");
}
?>