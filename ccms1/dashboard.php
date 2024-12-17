<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title>CCMS Admin Dashboard</title>
   

    <link rel="apple-touch-icon" href="apple-icon.png">
   

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php');?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            

<a href="view-allusers.php" target="_blank">
         <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
     
                        <?php $query=mysqli_query($con,"Select * from  tblusers");
$usercounts=mysqli_num_rows($query);
?>
                        <h3 class="mb-0">
                            <span class="count"><?php echo $usercounts;?></span>
                        </h3>
                        <p class="text-light">Total Number of Users</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </a>
            <!--/.col-->
<a href="manage-computer.php" target="_blank">
            <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">

                        <?php $query1=mysqli_query($con,"Select * from  tblcomputers");
$totalcomp=mysqli_num_rows($query1);
?>
                        <h3 class="mb-0">
                            <span class="count"><?php echo $totalcomp;?></span>
                        </h3>
                        <p class="text-light">Total Computers</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
  </a>

<a href="manage-newusers.php" target="_blank">
         <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
     
                        <?php $query=mysqli_query($con,"Select * from  tblusers where Status is null || Status=''");
$newusers=mysqli_num_rows($query);
?>
                        <h3 class="mb-0">
                            <span class="count"><?php echo $newusers;?></span>
                        </h3>
                        <p class="text-light">Total New Users (Still in Cafe)</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
</a>
            

<a href="manage-olduser.php" target="_blank">
                     <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
     
                        <?php $query=mysqli_query($con,"Select * from  tblusers where  Status='Out'");
$outusers=mysqli_num_rows($query);
?>
                        <h3 class="mb-0">
                            <span class="count"><?php echo $outusers;?></span>
                        </h3>
                        <p class="text-light">Old Users(Out from Cafe)</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
</a>
           
           

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
