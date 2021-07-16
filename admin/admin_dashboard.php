<?php 
include 'header.php';
include 'sidebar.php';
include '../php/config.php';

?>



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>

  <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

<?php 

$sql=mysqli_query($conn, "SELECT * FROM admin WHERE admin_email = '{$_SESSION['admin_email']}' AND admin_type = '1' ");
if(mysqli_num_rows($sql)>0){
    ?>
      <div id="condition">
<div class="col-sm- mt-5">
                <div class="row text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Company</div>
                            <div class="card-body">
                         
                              
                                <?php 
                                 $s="SELECT * FROM company";
                                                              
                                  $query=mysqli_query($conn,$s);
                                  $count=0;
                                while($row=mysqli_fetch_assoc($query)){
                                $count++;
                                }
                                ?>
                                  <h4 class="card-title"><?php echo $count;?>
                                </h4>
                               <a href="create_company.php" class="btn text-white">view</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Jobs</div>
                            <div class="card-body"> <?php 
                                 $s="SELECT * FROM job_time";
                                                              
                                  $query=mysqli_query($conn,$s);
                                  $count=0;
                                while($row=mysqli_fetch_assoc($query)){
                                $count++;
                                }
                                ?>
                                  <h4 class="card-title"><?php echo $count;?>
                                </h4>
                                <a href="category.php" class="btn text-white">view</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Apply</div>
                            <div class="card-body"> <?php 
                                 $s="SELECT * FROM admin";
                                                              
                                  $query=mysqli_query($conn,$s);
                                  $count=0;
                                while($row=mysqli_fetch_assoc($query)){
                                $count++;
                                }
                                ?>
                                  <h4 class="card-title"><?php echo $count;?>
                                </h4>
                                <a href="customers.php" class="btn text-white">view</a>
                            </div>
                        </div>
                    </div>
                </div>
   
                </div>
        <div class="mr-5 mt-5 text-center">
            <!-- table -->
            <p class="bg-success text-white p-2">Company Details</p>
            <table class="table">
      
                <thead>
                    <tr>
                        <th scope="col">Sr.No.</th>
                        <th scope="col">Company Id</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Company Email</th>
                       
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <?php
    $sql="SELECT * FROM company";
    $s=mysqli_query($conn,$sql);
    $count=0;
   while($row=mysqli_fetch_assoc($s)){
  
      $count=$count+1;
      $company_id=$row['company_id'];
      $company_name=$row['company_name'];
      $company_email=$row['admin'];
     ?>
                <tbody>
                    <tr>
   
                    <th scope="row"><?php echo $count;?></th>
                        <td><?php echo $company_id;?></td>
                        <td><?php echo $company_name;?></td>
                        <td><?php echo $company_email;?></td>
                        <td>
                        <a href="admin_company_delete.php?del=<?php echo $row['company_id'];?>" class="btn btn-danger mx-2"><i class="fas fa-trash-alt"></i></a></td>
                        <?php
      }

?>
                    </tr>
                </tbody>
                </div>

            </table>

   
    </div>

    <?php 
}
else{
  ?>
  <div id="condition">
<div class="col-sm- mt-5">
                <div class="row text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Customers</div>
                            <div class="card-body">
                         
                              
                                <?php 
                                 $s="SELECT * FROM admin";
                                                              
                                  $query=mysqli_query($conn,$s);
                                  $count=0;
                                while($row=mysqli_fetch_assoc($query)){
                                $count++;
                                }
                                ?>
                                  <h4 class="card-title"><?php echo $count;?>
                                </h4>
                               <a href="customers.php" class="btn text-white">view</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Job Created</div>
                            <div class="card-body"> <?php 
                                 $s="SELECT * FROM all_job";
                                                              
                                  $query=mysqli_query($conn,$s);
                                  $count=0;
                                while($row=mysqli_fetch_assoc($query)){
                                $count++;
                                }
                                ?>
                                  <h4 class="card-title"><?php echo $count;?>
                                </h4>
                                <a href="job_create.php" class="btn text-white">view</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Company</div>
                            <div class="card-body"> <?php 
                                 $s="SELECT * FROM  company";
                                                              
                                  $query=mysqli_query($conn,$s);
                                  $count=0;
                                while($row=mysqli_fetch_assoc($query)){
                                $count++;
                                }
                                ?>
                                  <h4 class="card-title"><?php echo $count;?>
                                </h4>
                                <a href="create_company.php" class="btn text-white">view</a>
                            </div>
                        </div>
                    </div>
                </div>
   
                </div>
        <div class="mr-5 mt-5 text-center">
            <!-- table -->
            <p class="bg-success text-white p-2">Application Details</p>
            <table class="table">
      
                <thead>
                    <tr>
                        <th scope="col">Sr.No.</th>
                        <th scope="col">Apply Id</th>
                        <th scope="col">Apply Name</th>
                        <th scope="col">Apply Email</th>
                       
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <?php
    $sql="SELECT * FROM job_appy";
    $s=mysqli_query($conn,$sql);
    $count=0;
   while($row=mysqli_fetch_assoc($s)){
  
      $count=$count+1;
      $apply_id=$row['id'];
      $apply_fname=$row['fname'];
      $apply_lname=$row['lname'];
      $apply_email=$row['job_seeker'];
     
     ?>
                <tbody>
                    <tr>
   
                    <th scope="row"><?php echo $count;?></th>
                        <td><?php echo $apply_id;?></td>
                        <td><?php echo $apply_fname;?><?php echo $apply_lname;?></td>
                        <td><?php echo $apply_email;?></td>
                        <td>
                        <a href="customer_company_admin.php?del=<?php echo $row['id'];?>" class="btn btn-danger mx-2"><i class="fas fa-trash-alt"></i></a></td>
                        <?php
      }

?>
                    </tr>
                </tbody>
                </div>

            </table>

   
    </div>
  <?php
}
?>
</main>

</div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
       integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
