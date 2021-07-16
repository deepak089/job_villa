
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
   integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Admin Login</title>
    <!-- Custom styles for this template -->
    <link href="../css/admin_login.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" id="login_form" method="post" action="#">
    <i class="fas fa-user-md" style="height:50px; font-weight:800; font-size:15vmin;"></i>
       <h1 class="h3 mb-3 my-3 font-weight-normal">Admin Login</h1>
      <label for="username" class="sr-only">username</label>
      <input type="text" id="username" name="admin_username" class="form-control my-3" placeholder="username" required>
     
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email"  name="admin_email"class="form-control my-3" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="admin_password" class="form-control my-3" placeholder="Password" required>
    
  
      <button class="btn btn-lg btn-primary btn-block" id = "btn" name ="submit" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy;2020-2021</p>
    </form>
    <!-- <script src="..\javascript\admin_loginn.js"></script> -->
    <script>

    $(document).ready(function(){
    $("#btn").click(function(e){
     e.preventDefault();
     var username=$('#username').val();
     var email=$('#email').val();
     var password=$('#password').val();
     
 
     $.ajax({
         url:"../php/admin_db_login.php",
         type:"post",
         data:{
             admin_username:username,
             admin_email:email,
             admin_password:password,
         },
         success:function(data){
            
            if(data =="success"){
                window.location.href="http://localhost/job_portal/admin/admin_dashboard.php";
            }
             
         }
     });
 
  });
  });
     </script>
  </body>
</html>
