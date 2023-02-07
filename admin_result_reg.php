<?php
 session_start();
?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link href="result.css" rel="stylesheet" media="all">
    <title>VKHS - Virtual Kill house System</title>
</head>

<body>
<div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <img style="height:60px ; width:60px;" src="./images/download.png">
                <a class="navbar-brand">VIRTUAL KILL HOUSE SYSTEM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./images/arrow.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <!-- here i need to add user's  name -->
                                    <h5 class="mb-0 text-white nav-user-name">Unit Authority </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>User Information</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                <!-- Add Role of user here by php -->
                                admin
                            </li>
                  
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Units</a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                             <a class="nav-link" href="user_unit.php">Registered Units</a> <!--add unit list  from database here -->
                                             <a class="nav-link" href="add_unit.php">Add Unit</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Firing Result</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Result Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_stat.html">Result Satictis</a>
                                        </li>
                                        </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Firing Form</a>
                                <div id="submenu-5" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="admin_firer_reg.php">Register Firer</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="container" >
                                <?php
                                    
                                    $dbname = 'idp';
                                    $dbuser = 'root';  
                                    $dbpass = ''; 
                                    $dbhost = 'localhost';

                                    $mysqli = new mysqli($dbhost, $dbuser,
                                    $dbpass, $dbname);

                                    // Checking for connections
                                    if ($mysqli->connect_error) {
                                    die('Connect Error (' .
                                    $mysqli->connect_errno . ') '.
                                    $mysqli->connect_error);
                                    }


                                    $sql = "SELECT * FROM `hitcount` ORDER BY  `Date` DESC" ;
                                    $result = $mysqli->query($sql);
                                    $mysqli->close();

                                    
                                ?> 
                                <?php if(isset())
                                <form action="user_view.php" method='POST'> ?>   
                                <div class="container">
                                <center><u><h1>Firing Result Publish By Admin</h1></u></center>
                                <table class="responsive-table">
                                    
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">No</th>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Total_fired</th>
                                        <th scope="col">Total_hit</th>
                                        <th scope="col">Firing_officer</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        // LOOP TILL END OF DATA
                                        while($rows=$result->fetch_assoc())
                                        {
                                            ?>
                                            <tr>
                                                <!-- FETCHING DATA FROM EACH
                                                    ROW OF EVERY COLUMN -->
                                                <td><?php echo $rows['Date'];?></td>
                                                <td><?php echo $rows['No'];?></td>
                                                <td><?php echo $rows['Rank'];?></td>
                                                <td><?php echo $rows['Name'];?></td>
                                                <td><?php echo $rows['Unit'];?></td>
                                                <td><?php echo $rows['Total_fired'];?></td>
                                                <td><?php echo $rows['Total_hit'];?></td>
                                                <td><?php echo $rows['Firing_officer'];?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                </table>
                                </div>
                                <div class="container">
                                <button style="border: 2px solid red;" type="submit">Publish</button>
                                </div>
                                </form>
                            
                                <?php  
                                    $SESSION["Date"]='Date';
                                    $SESSION["No"]= 'No';
                                    $SESSION["Rank"]='Rank';
                                    $SESSION["Name"]='Name';
                                    $SESSION["Unit"]='Name';
                                    $SESSION["Total_fired"]='Total_fired';
                                    $SESSION["Total_hit"]='Total_hit';
                               ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->



    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>
