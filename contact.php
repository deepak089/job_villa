<?php
$page='contact';
 include 'navbar.php';?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:jobvilla.com">jobvilla@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">jobvilla.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="contact.php" method="post" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" id="subject" name="subject"class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea  id="query" name="query" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" id="submmit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
    <?php include 'footer.php';?>
    <?php 
 include 'php/config.php';
  if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $query=$_POST['query'];

   $que="INSERT INTO contact ( name, email, subject, query) VALUES ('$name','$email','$subject','$query')";
  $sql=mysqli_query($conn,$que);
   
   if($sql){
     echo '<script>alert("sucessfully sumbiitted")</script>';
       }
       
     
     else
       {
         echo '<script>alert("try again");</script>';
       }
      }
   ?>
