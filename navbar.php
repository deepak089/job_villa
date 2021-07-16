<?php
session_start();

include 'php/config.php';

$sql=mysqli_query($conn,"SELECT * FROM profiles WHERE session_email='{$_SESSION['signup_email']}'");
while($row=mysqli_fetch_assoc($sql)){
  $img=$row['img'];
  $name=$row['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>JobPortal - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">JOBVILLA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($page==='home'){echo 'active';}?>"> <a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item<?php if($page=='about'){echo 'active';}?>"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item<?php if($page=='blog'){echo 'active';}?>"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item<?php if($page=='contact'){echo 'active';}?>"><a href="contact.php" class="nav-link">Contact</a></li>
          <?php
          if (isset($_SESSION['signup_email'])) {
          ?>
            <li class="nav-item cta mr-md-2"><a href="q" class="nav-link"><?php if(empty($name)){echo $_SESSION['signup_email'];}else{echo $name;} ?></a></li>

            <li class="nav-item ">
              <div class="dropdown">
                <img src="./profile_img/<?php if(empty($img)){echo "download.png"; }else{echo $img;} ?>" alt="" class="img-circle dropdown-toggle" type="button" data-toggle="dropdown" alt="no image" width="50" height="50">
                <ul class="dropdown-menu">
                <li><a href="my_profile.php">My Profile</a>
                
            <li class="nav-item bg-dark mr-md-2"><a href="logout.php" class="nav-link">Logout</a></li>

                </ul>
              </div>
            </li>

          <?php } else {
          ?>

            <li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link">Login</a></li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  