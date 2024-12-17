<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
<?php
$adminid=$_SESSION['ccmsaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adminid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 
                <a class="navbar-brand" href="dashboard.php">Cyber Cafe | <?php echo $name; ?></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Computer</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="add-computer.php">Add Computer</a></li>
                            <li><i class="menu-icon fa fa-file-o"></i><a href="manage-computer.php">Manage Computer</a></li>
                        </ul>
                    </li>




 <li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="add-users.php">Add User</a></li>
                            <li><i class="fa fa-user"></i><a href="manage-newusers.php">Manage New Users</a>
                            </li>
                            <li><i class="fa fa-user"></i><a href="manage-olduser.php">View Old Users</a></li>
                            <li><i class="fa fa-user"></i><a href="view-allusers.php">All Users</a></li>
                          
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="Add_billing.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Bill System</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-file-o"></i><a href="Add_billing.php">Add Bill</a></li> -->
                            <li><i class="fa fa-file-o"></i><a href="view-allbills.php">View All Bills</a>
</li>
                        </ul>
                    </li>
                    
  <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="bwdates-report-ds.php">Between Dates Report</a></li>
                           
                        </ul>
                    </li>
                    <li class="active">
                        <a href="search.php"> <i class="menu-icon fa fa-search"></i>Search for users </a>
                    </li>

                    <li class="active">
                        <a href="search-bill.php"> <i class="menu-icon fa fa-search"></i>Search for bills </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>