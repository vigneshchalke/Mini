<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
    header('location:logout.php');
    } else{
      if(isset($_POST['submit']))
    {
    $user_id = $_POST['user_id'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $total_amount = $_POST['total_amount'];

    $query =mysqli_query($con, "insert into tblbilling(user_id, start_time, end_time, total_amount) value('$user_id', '$start_time', '$end_time', '$total_amount')");


    if ($query) {
        echo '<script>alert("Billing information added successfully.")</script>';
        echo "<script>window.location.href ='Add_billing.php'</script>";

    }
    else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';       
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>CCMS Billing </title>
   

    <link rel="apple-touch-icon" href="apple-icon.png">
   


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('includes/header.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Billing form</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="Add_billing.php">Billing</a></li>
                            <li class="active">Billing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Billing form</strong><small> Time Selection</small></div>
                            <form name="bill" method="post" action="">
                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
                            } ?> </p>
                                 
                            <div class="card-body card-block">
 
                                <div class="form-group"><label for="user_id" class=" form-control-label">Bill Id</label><input type="text" name="user_id" value="" class="form-control" id="user_id" required="true"></div>
                                                                          
                                        <div class="form-group"><label for="start_time" class=" form-control-label">Start Time </label><input type="datetime-local" name="start_time" value="" id="time" class="form-control" required="true"></div>
                                            <div class="row form-group">
                                                <div class="col-12">
                                                <div class="form-group"><label for="end_time" class=" form-control-label">End Time </label><input type="datetime-local" name="end_time" value="" id="time" class="form-control" required="true"></div>
                                                    <div class="col-12">
                                                    <div class="form-group"><label for="total_amount" class=" form-control-label">Total Amount</label><input type="number" name="total_amount" step="0.01" id="amount" value="" class="form-control" required="true"></div>
                                                    </div>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                                    
                                                     <div class="card-footer">
                                                       <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i>  Add Billing
                                                        </button></p>
                                                        
                                                    </div>
                                                </div>
                                                </form>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
<?php }  ?>