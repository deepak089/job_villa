<?php 
include 'header.php';
include 'sidebar.php';
// <!-- code for update 
include '../php/config.php';
$msg=false;
$error=false;
if(isset($_POST['update_job'])){
 $id=$_POST['job_id'];
$customer_email=$_POST['customer_email'];
$job_title=$_POST['job_title'];
$des=$_POST['des'];
$keyword=$_POST['keyword'];
$category=$_POST['time'];
$country=$_POST['country'];
$city=$_POST['city'];
$state=$_POST['state'];
$sql=mysqli_query($conn,"UPDATE all_job set customer_email='$customer_email', job_title= '$job_title' , des='$des', keyword='$keyword',time='$category', country='$country', city='$city', state='$state'
                          WHERE job_id= '$id' ");
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
                        <li class="breadcrumb-item"><a href="job_create.php">Job create</a></li>
                        <li class="breadcrumb-item"><a href="#">Update Jobs</a></li>
                    </ol>
                </nav>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Update  Job</h1>
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
                    $sql1=mysqli_query($conn , "SELECT * FROM all_job WHERE job_id = '{$id}' ");
                    if(mysqli_num_rows($sql1)>0){
                        while($row=mysqli_fetch_assoc($sql1)){
                            ?>
                       
                        
                        <label  class="font-weight-bold" for="">Job Id</label>
                        <input type="text"class="form-control" readonly value="<?php echo $row['job_id'] ;?>" id="job_id" name="job_id">
                        </div>
                        <div class="form-group">
                        
                        <label  class="font-weight-bold" for="">Customer Email</label>
                        <input type="email"class="form-control" readonly id="customer_email" name="customer_email" value="<?php echo $row['customer_email'] ;?>" placeholder="enter customer email">
                        </div>
                        <div class="form-group">
                        <label class="font-weight-bold"  for="">Job Title</label>
                        <input type="text"class="form-control" name="job_title" id='job_title' value="<?php echo $row['job_title'] ;?>"  placeholder="enter job title">
                        </div>
                        <div class="form-group">
                        
                        <label  class="font-weight-bold" for="">Description</label>
                        <input type="text" class="form-control" name="des" id="des" value="<?php echo $row['des'] ;?>"  placeholder="enter description for job">
                        </div>
                        <div class="form-group">
                        
                        <label  class="font-weight-bold" for="">keyword</label>
                        <input type="text" class="form-control" name="keyword" id="keyword" value="<?php echo $row['keyword'] ;?>"  placeholder="enter keyword">
                        </div>
                        <div class="form-group">
                        <?php 
                        include '../php/config.php';
                         $sql=mysqli_query($conn,"SELECT * FROM all_job");


                        ?>
                        <label  class="font-weight-bold"  for="">Select Category</label>
                        
                        <select name="time"class="form-control" value="<?php  $row['time'];?>" id="time">
                        <?php
                        while($row=mysqli_fetch_assoc($sql)){
                     
                            ?>
                            
                       
                         <option value="<?php echo $row['job_id'];?>" ><?php echo $row['time'];?></option>
                     
                        <?php


                        }
                        
                        ?>
                        </select>
                        </div>
                        <div class="form-group">
                        <label  class="font-weight-bold" for="">Country</label>
                        <input type="text" class="form-control" name="country" id="country" value="<?php echo $row['country'] ;?>"  placeholder="enter country">
                        </div>
                        <div class="form-group">
                        <label  class="font-weight-bold" for="">State</label>
                        <input type="text" class="form-control" name="state" id="state" value="<?php echo $row['state'] ;?>"  placeholder="enter state">
                        </div>
                        <div class="form-group">
                        <label  class="font-weight-bold" for="">city</label>
                        <input type="text" class="form-control" name="city" id="city" value="<?php echo $row['city'] ;?>"  placeholder="enter city">
                        </div>
                     
                        <input type="text" name="job_id" id="id" value="<?php echo $_GET['edit'];?>" hidden>
                        <div class="form-group">
                        <button class="btn btn-block btn-primary my-4" name="update_job" >Update job</button>
                        <?php
                        if($msg){
                            echo '<div class="alert alert-primary" role="alert">
                            Update Successfully Done
                             </div>';

                        }
                        if($error){
                            echo  '<div class="alert alert-danger" role="alert">
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
