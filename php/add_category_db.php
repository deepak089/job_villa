<?php


include 'config.php';
$category=$_POST['time'];
$description=$_POST['description'];

if(!empty($category) && !empty($description)){

   $sql = mysqli_query($conn ,"INSERT INTO job_time( time, description) VALUES ('$category','$description')") ;
                                  
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