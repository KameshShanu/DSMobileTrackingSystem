<!DOCTYPE html>
<html lang="en">


<?php
include('db.php');
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    die();
}

$r="";
if($_POST){
    $save= mysql_query("insert into device values(0,'".$_POST['ime']."','1','".$_POST['name']."')");
    $r="done";
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>GPS Tracker</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <!-- header header  -->
    <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                </a>
            </div>
            <!-- End Logo -->

        </nav>
    </div>
    <!-- End header header -->
    <!-- Left Sidebar  -->
    <div class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-label">Home</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="index.php">Home </a></li>
                        </ul>
                    </li>
                    <li class="nav-label">App</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-phone"></i><span class="hide-menu">Devices</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="newDevice.php">New Device</a></li>
                            <li><a href="viewDevice.php">Device</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Users</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="newUser.php">New User</a></li>
                            <li><a href="viewUser.php">User</a></li>
                        </ul>
                    </li>

                    <li> <a  href="logout.php" ><i class="fa fa-close"></i><span class="hide-menu">Logout</span></a></li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </div>
    <!-- End Left Sidebar  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">New Devices</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Devices</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">

            <?php if($r!=""){ ?>
                <div class="alert alert-success">Device created.</div>
            <?php } ?>

            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-30">

                        <form action="newDevice.php" method="post">

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="ime" class="form-control" placeholder="Enter ime">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Phone Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>








            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->
<!-- All Jquery -->
<script src="js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->


<!-- Amchart -->
<script src="js/lib/morris-chart/raphael-min.js"></script>
<script src="js/lib/morris-chart/morris.js"></script>
<script src="js/lib/morris-chart/dashboard1-init.js"></script>


<script src="js/lib/calendar-2/moment.latest.min.js"></script>
<!-- scripit init-->
<script src="js/lib/calendar-2/semantic.ui.min.js"></script>
<!-- scripit init-->
<script src="js/lib/calendar-2/prism.min.js"></script>
<!-- scripit init-->
<script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
<!-- scripit init-->
<script src="js/lib/calendar-2/pignose.init.js"></script>

<script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
<script src="js/scripts.js"></script>
<!-- scripit init-->

<script src="js/custom.min.js"></script>

</body>

</html>