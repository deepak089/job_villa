<?php
include 'header.php';
include 'sidebar.php';
// <!-- code for update 
include '../php/config.php';
$msg = false;
$error = false;
if (isset($_POST['update_company'])) {
    $id = $_POST['company_id'];
    $company_name = $_POST['company_name'];
    $description = $_POST['description'];
    $admin =$_POST['admin'];

    $sql = mysqli_query($conn, "UPDATE company set company_name='$company_name' , description = '$description' , admin='$admin' WHERE company_id='$id' ");
    if ($sql) {
        $msg = true;
    } else {
        $error = true;
    }
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="create_company.php">Company</a></li>
            <li class="breadcrumb-item"><a href="#">Update Company</a></li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Company</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>
    <!-- adding customers -->
    <div style="width:50%;margin-left:25%; background-color:#101111; color:aliceblue;">
        <form action="#" method="post" style="margin: 5%; padding:3%">
            <div class="form-group">
                <?php
                include '../php/config.php';

                $id = $_GET['edit'];
                $sql1 = mysqli_query($conn, "SELECT * FROM company WHERE company_id = '{$id}' ");
                if (mysqli_num_rows($sql1) > 0) {
                    while ($row = mysqli_fetch_assoc($sql1)) {
                ?>


                        <label class="font-weight-bold" for="">Company Id</label>
                        <input type="text" class="form-control" readonly value="<?php echo $row['company_id']; ?>" id="admin_id" name="admin_id">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $row['company_name']; ?>" placeholder="enter company name">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="">Customer Desrciption</label>
                <textarea name="description" id="description" cols="30" style="display: flex;width:100% ;" rows="5" placeholder="enter the description"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="">Admin Type</label>
                 <select name="admin" id="admin" class="form-control">
                 <?php 
                 $query=mysqli_query($conn,"SELECT * FROM admin WHERE admin_type = '2'");
                 while($fetch=mysqli_fetch_assoc($query)){
                 ?>
                 <option value="<?php echo $fetch['admin_email'];?>"><?php echo $fetch['admin_email'];?></option>
                 <?php
                 }
                 ?>
                 </select>
                  </div>
            <input type="text" name="company_id" id="id" value="<?php echo $_GET['edit']; ?>" hidden>
            <div class="form-group">
                <button class="btn btn-block btn-primary my-4" name="update_company">Update</button>
                <?php
                        if ($msg) {
                            echo '<div class="alert alert-primary" role="alert">
                            Updated Successfully Done
                             </div>';
                        }
                        if ($error) {
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