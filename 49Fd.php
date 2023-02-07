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
    <link rel="stylesheet" href="./css/firer.css">

    <title>Adding user</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
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
                        
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Firing Result</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Result Show</a>
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
                        <div class="container">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?php 

                                require('db_connect.php');

                                $msg = '';
                                $msgClass = '';
                            ?>

                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta name="description" content="">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width"/>
                                
                                <!-- Bootstrap CDN -->
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                                <!-- Font Awesome CDN -->
                                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

                                <!-- Data Tables -->
                                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
                                <link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css">

                                <!-- Modal CSS -->
                                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
                                <!-- Bootstrap CDN -->
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

                                <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
                                <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
                                <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
                                <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>  
                                <!-- Title  -->
                            </script>

                                <title>Graph</title>   
                            </head>

                            <body>
                                <h2 style = "text-align: center; padding: 20px; background-color: #333; color: #fff;">Results </h2>
                                <div class = "container pt-5" style = "width: 100%">
                                <?php
                                if (isset($msg)) { ?>
                                    <div class="form-group">
                                        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                ?>
                                <div class="container">
                                <form action="" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_POST['search'])){echo $_POST['search']; } ?>" class="form-control" placeholder="Give input as 'No' or 'Unit' or 'Name'">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                                    
                            
                                <table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>No</th>
                                            <th>Rank</th>
                                            <th>Name</th>
                                            <th>Unit</th>
                                            <th>Total_fired</th>
                                            <th>Total_hit</th>
                                            <th>Firing_officer</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php 
                                        $con = mysqli_connect("localhost","root","","idp");

                                        if(isset($_POST['search']))
                                        {
                                        
                                            $filtervalues = $_POST['search'];
                                            
                                            $query = "SELECT * FROM hitcount WHERE Unit = '49 Fd Arty' and CONCAT(Date) LIKE '%$filtervalues%' or CONCAT(No) LIKE '%$filtervalues%' ";
                                
                                            $query_run = mysqli_query($con, $query);
                                            if(mysqli_num_rows($query_run) > 0)
                                            {
                                                foreach($query_run as $items)
                                                {
                                                    if($items['Unit']=='49 Fd Arty'){
                                                    ?>
                                                    
                                                    <tr>
                                                        <td><?= $items['Date']; ?></td>
                                                        <td><?= $items['No']; ?></td>
                                                        <td><?= $items['Rank']; ?></td>
                                                        <td><?= $items['Name']; ?></td>
                                                        <td><?= $items['Unit']; ?></td>
                                                        <td><?= $items['Total_fired']; ?></td>
                                                        <td><?= $items['Total_hit']; ?></td>
                                                        <td><?= $items['Firing_officer']; ?></td>
                                                        
                                                    </tr>
                                                    <?php
                                                    }
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                    <tr>
                                                        <td colspan="4">No Record Found</td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                    
                                
                                    else{
                                        echo 'Wrong Unit';
                                    }
                                

                                    ?>
                                </tbody>
                            </table>
                            
                            <?php 
                            //index.php
                            require('db_connect.php');

                            if(isset($_POST['search']))
                            {
                            $filtervalues = $_POST['search'];
                            $query = "SELECT * FROM hitcount WHERE  Unit = '49 Fd Arty' and CONCAT(Date) LIKE '%$filtervalues%' or CONCAT(No) LIKE '%$filtervalues%' ";
                            $result = mysqli_query($conn, $query);
                            $chart_data = '';
                            while($row = mysqli_fetch_array($result))
                            {
                            $chart_data .= "{ No:'".$row["No"]."', Total_fired:'".$row["Total_fired"]."', Total_hit:'".$row["Total_hit"]."'}, ";
                            }
                            $chart_data = substr($chart_data, 0, -2);
                            }
                            ?>
                            <br /><br />
                            <div class="container" style="width:900px;">
                            <h2 class="text-center">Graphical View For User</h2>   
                            <br /><br />
                            <div id="chart"></div>

                            <script>
                            Morris.Bar({
                            element : 'chart',
                            data:[<?php echo $chart_data; ?>],
                            xkey:['No'],
                            ykeys:['Total_hit'],
                            labels:['No', 'Total_hit'],
                            hideHover:'auto',
                            stacked:true
                            });
                            </script> 
                            </div> 

                                <script src="https://code.jquery.com/jquery-3.4.0.js"></script>

                                <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
                                
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example').DataTable();
                                    } );
                                </script>


                            </form>
                                <!-- Style CSS -->
                                </body>
                            </html>

                                </div>
                                </div>
                                </div>
                                </div>                   
