<?php


include 'config.php';
   
$username=$_POST['username'];
$email=$_POST['email'];
$name=$_POST['name'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$admin_type=$_POST['admin_type'];

if(!empty($username) && !empty($email) && !empty($lname) && !empty($password) && !empty($admin_type)){

   $sql = mysqli_query($conn , "INSERT INTO admin( admin_email, admin_password, admin_username, name, lname, admin_type) 
                                  VALUES ('$email'  ,'$password','$username' ,'$name','$lname','$admin_type')") ;
                                  
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