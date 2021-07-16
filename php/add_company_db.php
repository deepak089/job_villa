<?php


include 'config.php';
$company_name=$_POST['company_name'];
$description=$_POST['description'];
$admin=$_POST['admin'];

if(!empty($company_name) && !empty($description) && !empty($admin)){

   $sql = mysqli_query($conn ,"INSERT INTO company( company_name, description ,admin) VALUES ('$company_name','$description','$admin')") ;
                                  
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