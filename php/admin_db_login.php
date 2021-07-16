<?php

include 'config.php';

if(!isset($_SESSION)){
    session_start();
}
// if($_SESSION['is_login']=== true){
//     $_SESSION['admin_email']=$email;
// }
// else
// {
//     header('location:/admin_login.php');
// }


$username=$_POST['admin_username'];
$email=$_POST['admin_email'];
$password=$_POST['admin_password'];


if(!empty($email) && !empty($password)){
    $sql="SELECT admin_email,admin_password FROM admin WHERE admin_email ='{$email}' AND admin_password ='{$password}'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_num_rows($res);
        if($row > 0)
        {
            $_SESSION['is_login']=true;
            $_SESSION['admin_email']=$email;
            echo "success";
            
        }
        else if($row === 0)
        {
            echo "please enter a valid email";
        }
}

else
{
    echo "please enter all details";
}

?>