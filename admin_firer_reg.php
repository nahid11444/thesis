<?php
  
  session_start(); 

?>
<!doctype html>
<html lang="en"> 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/firer.css">
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
    <title>VKHS</title>
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
                                            <a class="nav-link" href="admin_result_reg.php">Result Register</a>
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
                                            <a class="nav-link" href="#">Register Firer</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="wrapper">        
                        <div class="form_container">
                            <form method="POST">
                                <div class="heading">
                                <h2>Firer Registion Form</h2>
                                </div>
                                <div class="form_wrap">
                                    <div class="form_item">
                                        <label>No</label>
                                        <input type="text" name="No" Required>
                                    </div>
                                    <div class="error" id="No"></div>  
                                    <div class="form_item">
                                        <label>Rank</label>
                                        <select name="Rank" Required>
                                        <option value="" disabled="disabled" selected="selected">Choose Rank</option>
                                            <option value="Lt Col">Lt Col</option>
                                            <option value="Maj">Maj</option>
                                            <option value="Capt">Capt</option>
                                            <option value="Lt">Lt</option>
                                            <option value="2 Lt">2 Lt</option>
                                            <option value="Hnr Capt">Hnr Capt</option>
                                            <option value="Hnr Lt">Hnr Lt</option>
                                            <option value="SM">MWO</option>
                                            <option value="SWO">SWO</option>
                                            <option value="WO">WO</option>
                                            <option value="Sgt">Sgt</option>
                                            <option value="Cpl">Cpl</option>
                                            <option value="Lcpl">Lcpl</option>
                                            <option value="Snk">Snk</option>
                                        </select>
                                     
                                    </div>
                                </div>
                                <div class="form_wrap">
                                    <div class="form_item">
                                        <label>Name</label>
                                        <input type="text" name="Name" Required>
                                     
                                    </div>
                                    
                                </div>
                                <div class="form_wrap">
                                    <div class="form_item">
                                        <label>Unit</label>
                                        <input type="text" name="Unit" Required>
                                    </div>
                                    <div class="form_item">
                                        <label>Firing Officer</label>
                                        <input type="text" name="Firing_officer" Required>
                                    
                                    </div>
                                </div>
                                <div class="form_wrap">
                                    <div class="form_item">
                                        <label>Total fired</label>
                                        <input type="text" name="Total_fired" value="30" >
                                       
                                    </div>
                                </div>
                                <div class="p-t-15">
                                    <button class="btn btn-primary" type="submit" name="register">Register</button>
                                </div>

                             

                          
                                </form>
                        </div>
                    </div>
                        
                </div>

            </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->


         </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
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

    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>

                                       
<?php  

    if(isset($_POST['register'])){
        $No=$_POST['No'];
        $Rank=$_POST['Rank'];
        $Name=$_POST['Name'];
        $Unit=$_POST['Unit'];
        $Total_fired=$_POST['Total_fired'];
        $Firing_officer=$_POST['Firing_officer'];

extract($_REQUEST);
$file=fopen("read.txt","a");

ftruncate($file,0);

fwrite($file, "");
fwrite($file, $No.',');
fwrite($file, "");
fwrite($file, $Rank.',');
fwrite($file, "");
fwrite($file, $Name.',');
fwrite($file, "");
fwrite($file, $Unit.',');
fwrite($file, "");
fwrite($file, $Total_fired.',');
fwrite($file, "");
fwrite($file, $Firing_officer.',');

fclose($file);
}
?>

