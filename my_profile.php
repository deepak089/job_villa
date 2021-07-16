<?php include 'navbar.php'; ?>
<?php
// session_start();
if (isset($_SESSION['signup_email'])) {
} else {
    header("location:job-post.php");
}

?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3">
                        <a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3">
                        <a href="my_profile.php">My Profile<i class="ion-ios-arrow-forward"></i></a>
                        <!-- </span> <span>Single</span></p> -->
                        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Profile</h1>
            </div>
        </div>
    </div>
</div>

<br>
<div style="margin-left:25%; width:50%;border:5px solid grey;padding:10px;">
    <form action="php/profile_db_add.php" id="profile_form" name="profile_form" enctype="multipart/form-data" method="post">
            <?php  include 'php/config.php';
            $query=mysqli_query($conn,"SELECT * FROM profiles WHERE session_email= '{$_SESSION['signup_email']}'");
            while($row=mysqli_fetch_assoc($query)){
                $img=$row['img'];
                $name=$row['name'];
                $dob=$row['dob'];
                $phone=$row['number'];
                $email=$row['email'];

            }
           ?>
            
        <div class="row">
            <div class="col-md-6">
                <img src="./profile_img/<?php if(!empty($img)) {echo $img;} else { echo "download.png"; } ?>" alt="no image" class="img-thumbnail">
            </div>
            <div class="col-md-6">
                <input type="file" class="form-control" name="img" id="img-profile">
            </div>
        </div>
        <br>
        <!-- <div style="margin-left:10%;">/ -->
        <div class="row">
            <div class="col-md-6 font-weight-bold">
                <td>Enter your Name:</td>
            </div>

            <div class="col-md-6 font-weight-bold">
                <td><input type="text" name="name" value="<?php if(!empty($name)) echo $name ;?>" id="name" placeholder="Enter your name" class="form-control"></td>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-6 font-weight-bold">
                <td>D.O.B:</td>
            </div>
            <div class="col-md-6 font-weight-bold">
                <td><input type="Date" value="<?php if(!empty($dob)) echo $dob;?>" name="dob" id="dob" placeholder="Enter your dob" class="form-control"></td>
            </div>


        </div>
        <br>
        <div class="row">
            <div class="col-md-6 font-weight-bold">
                <td>Mobile Number:</td>
            </div>

            <div class="col-md-6">
                <td><input type="number" value="<?php if(!empty($phone)) echo $phone ;?>" name="number" id="number" placeholder="Enter your number" class="form-control"></td>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-6 font-weight-bold">
                <td>Email</td>
            </div>

            <div class="col-md-6">
                <td><input type="email" value="<?php if(!empty($email)) echo $email;?>" name="email" id="email" placeholder="Enter your Email" class="form-control"></td>
            </div>

        </div>

        <br>
        <div class="row" style="margin-left: 50%">
        <div class="form-group">
            <input type="submit" id="submit" placeholder="submit" class="btn btn-success " name="submit">
        </div>
        </div>
   
    </form>
</div>

<!-- <section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">


        </div>
    </div>
</section>  -->
<?php
include 'footer.php'; ?>
