<?php 

// include 'header.php';
include '../php/config.php';


$sql=mysqli_query($conn, "SELECT * FROM admin WHERE admin_email = '{$_SESSION['admin_email']}' AND admin_type = '1' ");
if(mysqli_num_rows($sql)>0){
    ?>
<div class="container-fluid">
<div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin_dashboard.php">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
              
               
                <li class="nav-item">
                    <a class="nav-link" href="customers.php">
                        <span data-feather="users"></span>
                        Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="job_create.php">
                        <span data-feather="bar-chart-2"></span>
                        Job create
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_company.php">
                        <span data-feather="layers"></span>
                        Company
                    </a>
                </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="category.php">
                        <span data-feather="file-text"></span>
                       Category
                    </a>
                </li>
            </ul>   
        </div>
    </nav>
<?php
}
else{
    ?>  
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" href="customers.php">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="job_create.php">
                                <span data-feather="bar-chart-2"></span>
                                Job create
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apply_job.php">
                                <span data-feather="layers"></span>
                             Apply jobs
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                      
                    </ul>
                </div>
            </nav>


<?php

}
?>