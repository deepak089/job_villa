<?php

include '../php/config.php';

$del=$_GET['del'];
$sql=mysqli_query($conn, "DELETE  FROM  all_job WHERE  job_id= '{$del}'");

if($sql){
    echo '<script>alert("Data Deleted successfully")</script>';
    header('location:job_create.php');
}
else
{
    echo '<script>alert("Data not deleted some error occured")</script>';
}
?>