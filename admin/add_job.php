<?php
include 'header.php';
include 'sidebar.php';
?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job_create.php">Job create</a></li>
            <li class="breadcrumb-item"><a href="add_job.php">Add job</a></li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add job</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>
    <!-- adding customers -->
    <div style="width:50%;margin-left:25%; background-color:#101111; color:aliceblue;">
        <form action="#" method="post" style="margin: 5%; padding:3%">
            <div class="form-group">
                <label class="font-weight-bold" for="">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title" placeholder="enter job title">

            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="">Description</label>
                <input type="text" class="form-control" id="des" name="des" placeholder="enter job description">

            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="">Enter keyword</label>
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="enter job keyword">

            </div>
            <div class="form-group">
                <label for="">Category</label>
                
                <select name="time" class="form-control" id="time">
                <?php
                include '../php/config.php';
                $sql=mysqli_query($conn,"SELECT * FROM job_time");
                while($row=mysqli_fetch_assoc($sql)){
             ?>     
               <option value="<?php echo $row['id'];?>"> <?php echo $row['time']; ?> </option>
            <?php
            }
            ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Country</label>
                <select name="country" class="countries form-control" id="countryId">
                    <option value="">Select Country</option>
                </select>
            </div>
            <div class="form-group">
                
            <label for="">State</label>
                <select name="state" class="states form-control" id="stateId">
                    <option value="">Select State</option>
                </select>
            </div>
            <div class="form-group">
                
            <label for="">City</label>
                <select name="city" class="cities form-control" id="cityId">
                    <option value="">Select City</option>
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-primary my-4" name="add_job">Add Job</button>
                <div id="msg"></div>
            </div>

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
<script>
    $(document).ready(function() {
        $(".btn").on('click', function(e) {
            e.preventDefault();
            var job_title = $("#job_title").val();
            var des = $("#des").val();
            var keyword =$("#keyword").val();
            var time=$("#time").val();
            var country = $("#countryId").val();
            var state = $("#stateId").val();
            var city = $("#cityId").val();



            $.ajax({
                url: "../php/add_job_db.php",
                type: "post",
                data: {
                    job_title: job_title,
                    des: des,
                    keyword:keyword,
                    time:time,
                    country: country,
                    state: state,
                    city: city,
                },
                success: function(data) {
                    $("#msg").html(data);
                }


            });

        });

    });
</script>
</body>

</html>