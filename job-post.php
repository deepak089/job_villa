<?php session_start();?>
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

  <body class="text-center">
    <form class="form-signin" method="post" action="job-post.php" >
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control my-3" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control my-3" placeholder="Password" required>
     
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login in</button>
      <a href="signup.php">Create Account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
<?php
include 'php/config.php';

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

    $sql= "SELECT * FROM signup WHERE email ='{$email}' AND password ='{$password}'";
        $res = mysqli_query($conn,$sql);
        
        if($res){
        if(mysqli_num_rows($res)>0)
        {
            $_SESSION['signup_email']=$email;
             header('location:index.php');
        }
      

else
{
echo  '<script>alert("Enter correct and password");</script>';
}
}
}




?>
