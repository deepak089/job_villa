
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center" >
    <form class="form-signin" action="new-post.php" method="post">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only my-3">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only my-3">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
     
      <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
    </form>
  </body>
</html>
<?php
session_start();
include 'php/config.php';

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
if(!empty($email) && !empty($password)  ){
    $sql="SELECT admin_email,admin_password FROM admin WHERE admin_email ='{$email}' AND admin_password ='{$password}' AND admin_type ='2' ";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_num_rows($res);
        if($row > 0)
        {
            $_SESSION['is_login']=true;
            $_SESSION['admin_email']=$email;
           
        header('location:./admin/admin_dashboard.php');
        }
        else if($row === 0)
        {
            echo '<script>alert("please enter a valid email")</script>';
        }
}
}

?>
