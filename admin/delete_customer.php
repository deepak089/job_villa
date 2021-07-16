<?php

include '../php/config.php';

$del=$_GET['del'];
$sql=mysqli_query($conn, "DELETE  FROM  admin WHERE  admin_id= '{$del}'");

if($sql){
    echo '<script>alert("Data Deleted successfully")</script>';
    header('location:customers.php');
}
else
{
    echo '<script>alert("Data not deleted some error occured")</script>';
}
?>