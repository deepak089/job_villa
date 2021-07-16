<?php

include 'config.php';
session_start();
$session_email=$_SESSION['signup_email'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$phone=$_POST['number'];
$email=$_POST['email'];

$img=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];

$sql=mysqli_query($conn,"SELECT * FROM profiles WHERE session_email='{$_SESSION['signup_email']}'");
if($sql){
            $query=mysqli_query($conn,"UPDATE profiles SET img='$img',name='$name',dob='$dob',number='$phone',email='$email' WHERE session_email='$session_email'");
        if($query){
            echo '<h1>profile updated successfully!!!</h1>';
        }
        else
        {
            
            echo '<h1>Some Error Occur...</h1>';
        }
   }
else
{
    
move_uploaded_file($_FILES['img']['tmp_name'],'../profile_img/'.$img);
$query=mysqli_query($conn,"INSERT INTO profiles(img, name, dob, number, email,session_email) VALUES ('$img','$name','$dob','$phone','$email','$session_email')");
if($query){
    echo '<h1>profile Added successfully!!!</h1>';
}
else
{
    
    echo '<h1>Some Error Occur...</h1>';
}
}

?>