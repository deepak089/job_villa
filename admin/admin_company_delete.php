<?php

include '../php/config.php';

$del=$_GET['del'];
$sql=mysqli_query($conn, "DELETE  FROM  company  WHERE  company_id= '{$del}'");

if($sql){
    echo '<script>alert("Data Deleted successfully")</script>';
    header('location:admin_dashboard.php');
}
else
{
    echo '<script>alert("Data not deleted some error occured")</script>';
}
?>