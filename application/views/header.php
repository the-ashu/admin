
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- App Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo.png">
    <!-- App Title -->
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DataTables example - Bootstrap 3</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <link href="<?php echo base_url();?>assets/plugins/fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/token-input-facebook.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-select2/css/select2.min.css" rel="stylesheet" />

     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/product.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/livesearch.min.css" />
    <link href="<?php echo base_url();?>assets/plugins/summernote/summernote.css" rel="stylesheet" />
    <!-- Custombox css -->
    <link href="<?php echo base_url();?>assets/plugins/custombox/css/custombox.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- 	<link href="assets/plugins/multiselect/css/bootstrap-multiselect.css"  rel="stylesheet" type="text/css" />

            <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" /> -->



    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>

    <style>
        .kv-file-upload
        {
            display:none
        }
    </style>
</head>
<body><!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="dashboard" class="logo m-b-5 m-t-0">
                    <img src="<?php echo base_url();?>assets/images/users/5b5c40ddf26e5.png"  class="img-circle" height="50px"> Patel And Sons Krishi Sewa Kendra</a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown navbar-c-items">
                        <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                            <img src="<?php echo base_url();?>assets/images/users/5b5c40ddf26e5.png" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                            <li><a href="functions/login.php?do=logout"><i class="ti-power-off text-danger m-r-10"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>
    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu"><a href="<?php echo base_url();?>welcome/dashboard">Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>welcome/product">Product Master</a></li>

                    <li class="has-submenu">
                        <a href="#">Supplier</a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url();?>welcome/supplier">Supplier</a></li>
                            <li><a href="<?php echo base_url();?>welcome/purchaseproduct">Purchase Product</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Client</a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url();?>welcome/client">Client</a></li>
                            <li><a href="<?php echo base_url();?>welcome/clientproductrate">Product Rate</a></li>
                            <li><a href="<?php echo base_url();?>welcome/clientorder">Order</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>welcome/bill">Bill Issue</a></li>
                    <!--<li><a href="view_sales.php">View Sales</a></li>-->
                    <li class="has-submenu">
                        <a href="#">Reports</a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url();?>welcome/reportproduct">Product </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportproductsales">Product Sales</a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportsupplier">Supplier </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportpurchaseproduct">Purchase Product </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportpurchase">Purchase </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportsupplierpurchase">Supplier Purchase </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportclient">Client </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportclientrate">Client Rate </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportclientorder">Client Order </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportclientsales">Client Sales </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportbill">Bill Issue </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportbilldetails">Bill Details </a></li>
                            <li><a href="<?php echo base_url();?>welcome/reportsales">Sales </a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Settings</a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url();?>welcome/profile">Profile</a></li>
                            <li><a href="<?php echo base_url();?>welcome/changepassword">Setting</a></li>
                            <li><a href="<?php echo base_url();?>assets/db.sql">Backup Database</a></li>
                            <li><a href="<?php echo base_url();?>welcome/logout">Logout</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu        -->
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>

<script data-cfasync="false" src="<?php echo base_url();?>cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/detect.js"></script>
<script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url();?>assets/js/waves.js"></script>
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-knob/jquery.knob.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

<!--    <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script> -->


<!--Summernote js-->
