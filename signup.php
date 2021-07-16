
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
    <form class="form-signin" method="POST" action="signup.php">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" class="form-control my-3" name="email" placeholder="Email address" required autofocus>
      
      
      <label for="" class="sr-only">First Name</label>
      <input type="text" id="fname" class="form-control my-3" name="fname" placeholder="Enter the first name" required autofocus>
      
      <label for="" class="sr-only">Last Name</label>
      <input type="text" id="lname" class="form-control my-3" name="lname" placeholder="Enter the Last name" required autofocus>
      
      <label for="" class="sr-only">D.O.B</label>
      <input type="Date" id="dob" class="form-control my-3" name="dob" required autofocus>

      <label for="" class="sr-only">Mobile Number</label>
      <input type="phone" id="phone" class="form-control my-3" name="phone" placeholder="Enter the phone number" required autofocus>
      
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="phone" class="form-control my-3"name="password" placeholder="Password" required>

     
      <button class="btn btn-lg btn-primary btn-block"  name="signup_submit" id="btn" type="submit">Sign in</button>
      <a href="job-post.php">Already Have Account?</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","job_portal");
if(isset($_POST['signup_submit'])){
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$password=$_POST['password'];



if(!empty($email) &&  !empty($fname) && !empty($lname) &&  !empty($dob) &&  !empty($phone) && !empty($password)){
    
    $sql="INSERT INTO signup(email, fname, lname, dob, phone, password) VALUES ('$email','$fname','$lname','$dob','$phone','$password')";
       $res=mysqli_query($conn,$sql);
       if($res){
           
               echo "<script>alert('you can now login')</script>";
            header('location:job-post.php');
          
}
}
else
{
    echo "please enter all details";
}
}
?>
