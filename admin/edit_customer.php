<?php 
include 'header.php';
include 'sidebar.php';
// <!-- code for update 
include '../php/config.php';
$msg=false;
$error=false;
if(isset($_POST['update_customer'])){
       $id=$_POST['admin_id'];
$username=$_POST['username'];
$email=$_POST['email'];
$name=$_POST['name'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$admin_type=$_POST['admin_type'];
$sql=mysqli_query($conn,"UPDATE admin set admin_email ='$email', admin_username= '$username' , admin_password='$password',name='$name', lname='$lname',admin_type='$admin_type'
                          WHERE admin_id='$id' ");
if($sql){
  $msg=true;
}
else
{
 $error=true;
}

}
?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                        <li class="breadcrumb-item"><a href="#">Update Customer</a></li>
                    </ol>
                </nav>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Update  Customers</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                        </div>
                    </div>
                </div>
                <!-- adding customers -->
                <div style="width:50%;margin-left:25%; background-color:#101111; color:aliceblue;" >
                    <form action="#" method="post" style="margin: 5%; padding:3%">
                    <div class="form-group">
                    <?php
                    include '../php/config.php';

                    $id=$_GET['edit'];
                    $sql1=mysqli_query($conn , "SELECT * FROM admin WHERE admin_id = '{$id}' ");
                    if(mysqli_num_rows($sql1)>0){
                        while($row=mysqli_fetch_assoc($sql1)){
                            ?>
                       
                        
                        <label  class="font-weight-bold" for="">Customer Id</label>
                        <input type="text"class="form-control" readonly value="<?php echo $row['admin_id'] ;?>" id="admin_id" name="admin_id">
                        </div>
                        <div class="form-group">
                        
                        <label  class="font-weight-bold" for="">Customer Username</label>
                        <input type="text"class="form-control" id="username" name="username" value="<?php echo $row['admin_username'] ;?>" placeholder="enter user name">
                        </div>
                        <div class="form-group">
                        <label class="font-weight-bold"  for="">Customer email</label>
                        <input type="email"class="form-control" name="email" id='email' value="<?php echo $row['admin_email'] ;?>"  placeholder="enter name">
                        </div>
                        <div class="form-group">
                        
                        <label  class="font-weight-bold" for="">Customer Name</label>
                        <input type="text" class="form-control" name="name"id="fname" value="<?php echo $row['name'] ;?>"  placeholder="enter name">
                        </div>
                        <div class="form-group">
                        <label  class="font-weight-bold" for="">Customer last name</label>
                        <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $row['lname'] ;?>"  placeholder="enter last name">
                        </div>
                        <div class="form-group">
                        <label  class="font-weight-bold" for="">Customer password</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $row['admin_password'] ;?>"  placeholder="enter password">
                        </div>
                        <div class="form-group">
                        <label  class="font-weight-bold"  for="">Admin type</label>
                        <select name="admin_type" value="<?php echo $row['admin_type'];?>" id="admin_type">
                        <option value="1" >Super Admin</option>
                        <option value="2" >Customer Admin</option>
                        </select>
                        </div>
                        <input type="text" name="admin_id" id="id" value="<?php echo $_GET['edit'];?>" hidden>
                        <div class="form-group">
                        <button class="btn btn-block btn-primary my-4" name="update_customer" >Update</button>
                        <?php
                        if($msg){
                            echo '<div class="alert alert-primary" role="alert">
                            Update Successfully Done
                             </div>';

                        }
                        if($error){
                            echo  '<div class="alert alert-primary" role="alert">
                            Not  Successfully Done
                             </div>';

                        }
                        ?>
                        </div>
                        <?php
                    }
                    }
                    ?>
                    </form>
                </div>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                <div class="table-responsive">

                </div>
            </main>
        </div>
    </div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    
</body>

</html>
