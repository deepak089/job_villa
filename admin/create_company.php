<?php
// if(!isset($_SESSION)){
// session_start();
// }

include '../php/config.php';
include 'header.php';
include 'sidebar.php';
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="customers.php">Company</a></li>
      
    </ol>
  </nav>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Company</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
      </div>
      <a href="add_company.php" class="btn btn-primary">Add Company</a>
    </div>
  </div>
  <!-- data table -->
  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>Sr no</th>
        <th>Company Name</th>
        <th>Description</th>
        <th>Admin</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = mysqli_query($conn, "SELECT * FROM company");
      if (mysqli_num_rows($sql) > 0) {
        $count = 0;
        while ($row = mysqli_fetch_assoc($sql)) {
          $count++;
      ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row['company_name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['admin'];?></td>
            <td>
              <div class="row">
                <a href="edit_company.php?edit=<?php echo $row['company_id'];?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                
                <a href="delete_company.php?del=<?php echo $row['company_id'];?>" class="btn btn-danger mx-2"><i class="fas fa-trash-alt"></i></a>
              </div>
            </td>
          </tr>
      <?php
        }
      }
      ?>
    </tbody>
    <tfoot>
      <tr>
       
      <th>Sr no</th>
        <th>Company Name</th>
        <th>Description</th>
        <th>Admin</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
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