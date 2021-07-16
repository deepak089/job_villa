<?php
include 'header.php';
include 'sidebar.php';
// <!-- code for update ---->>>>
include '../php/config.php';
$msg = false;
$error = false;
if (isset($_POST['update_category'])) {
    $id = $_POST['id'];
    $category = $_POST['time'];
    $description = $_POST['description'];

    $sql = mysqli_query($conn, "UPDATE job_time set time='$category', description = '$description' WHERE id='$id' ");
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
            <li class="breadcrumb-item"><a href="category.php">Category</a></li>
            <li class="breadcrumb-item"><a href="edit_category.php">Update Category</a></li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Category</h1>
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
                $sql1 = mysqli_query($conn, "SELECT * FROM job_time WHERE id = '{$id}' ");
                if (mysqli_num_rows($sql1) > 0) {
                    while ($row = mysqli_fetch_assoc($sql1)) {
                ?>


                        <label class="font-weight-bold" for="">CategoryId</label>
                        <input type="text" class="form-control" readonly value="<?php echo $row['id']; ?>" id="id" name="id">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="">Category type</label>
                <input type="text" class="form-control" id="time" name="time" value="<?php echo $row['time']; ?>" placeholder="enter Category type">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="">Desrciption</label>
                <textarea name="description" id="description" cols="30" style="display: flex;width:100% ;" rows="5" placeholder="enter the description"><?php echo $row['description']; ?></textarea>
            </div>
            <input type="text" name="company_id" id="id" value="<?php echo $_GET['edit']; ?>" hidden>
            <div class="form-group">
                <button class="btn btn-block btn-primary my-4" name="update_category">Update</button>
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