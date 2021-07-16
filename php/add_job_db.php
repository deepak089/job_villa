<?php

session_start();
include 'config.php';

$email = $_SESSION['admin_email'];
// $customer_email = $_POST['customer_email'];
$job_title = $_POST['job_title'];
$description = $_POST['des'];
$keyword=$_POST['keyword'];
$category=$_POST['time'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

if(!empty($job_title) && !empty($description) && !empty($country) && !empty($state) && !empty($city) && !empty($keyword) && !empty($category)){

   $sql = mysqli_query($conn ,"INSERT INTO all_job(customer_email, job_title, des,keyword,time, country, state, city) 
                               VALUES ('$email','$job_title','$description','$keyword','$category','$country','$state','$city')");
                                  
    echo '<div class="alert alert-primary" role="alert">
           Insertion Successfully Done
         </div>';
}
else
{
    echo '<div class="alert alert-danger" role="alert">
           Fill All The Details
    </div>';
}


?> 