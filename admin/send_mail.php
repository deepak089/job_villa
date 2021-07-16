<?php
if (!isset($_SESSION)) {
    session_start();
}
include 'header.php';
include 'sidebar.php';
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="apply_job.php">Apply Jobs</a></li>

            <li class="breadcrumb-item"><a href="#">Send Email</a></li>

        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Send Email</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
            <!-- <a href="add_job.php" class="btn btn-primary">Create Job</a> -->
        </div>
    </div>
    <!-- data form -->
    <?php
    include '../php/config.php';
    $id = $_GET['id'];

    $insert =  "SELECT * FROM job_appy LEFT JOIN all_job ON job_appy.id_job = all_job.job_id  WHERE id='$id'";


    $sql = mysqli_query($conn, $insert);

    $count = 0;
    while ($row=mysqli_fetch_assoc($sql)) {
        $count++;
    ?>
        <div class="table-responsive">
            <form action="phpmailer.php" method="post" style="border: 5px solid grey;width:80%;margin-left:10%;padding:10px;margin-bottom:10px;">


                <h1><?php echo strtoupper($row['fname']); ?> <?php echo strtoupper($row['lname']); ?></h1>
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                <div class="form-group">
                    <label for="">To:</label>
                    <td><input type="email"  name="to" id="to" class="form-control" value="<?php $row['job_seeker']; ?>"></td>
                </div>
                <div class="form-group">
                    <label for="">From:</label>
                    <td><input type="email" name="from" id="from" class="form-control" placeholder="from....."></td>
                </div>
                <div class="form-group"><label for="">body:</label>
                <textarea class="form-control" name="body" id="body" col="30" row="10"></textarea>
                </div>
                <input type="submit" value="submit" name="submit" id="submit" class="form-control btn btn-success">
            </form>
        <?php
    }
        ?>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


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