
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
    <!-- Summernote css -->

    <!-- DataTables -->
    <link href="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/plugins/fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/token-input-facebook.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-select2/css/select2.min.css" rel="stylesheet" />


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
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

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
                    <li class="has-submenu"><a href="dashboard">Dashboard</a></li>
                    <li><a href="product">Product Master</a></li>

                    <li class="has-submenu">
                        <a href="#">Supplier</a>
                        <ul class="submenu">
                            <li><a href="supplier">Supplier</a></li>
                            <li><a href="purchase-product.php">Purchase Product</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Client</a>
                        <ul class="submenu">
                            <li><a href="client.php">Client</a></li>
                            <li><a href="client-product-rate.php">Product Rate</a></li>
                            <li><a href="client-order.php">Order</a></li>
                        </ul>
                    </li>
                    <li><a href="bill.php">Bill Issue</a></li>
                    <!--<li><a href="view_sales.php">View Sales</a></li>-->
                    <li class="has-submenu">
                        <a href="#">Reports</a>
                        <ul class="submenu">
                            <li><a href="report-product.php">Product </a></li>
                            <li><a href="report-product-sales.php">Product Sales</a></li>
                            <li><a href="report-supplier.php">Supplier </a></li>
                            <li><a href="report-purchase-product.php">Purchase Product </a></li>
                            <li><a href="report-purchase.php">Purchase </a></li>
                            <li><a href="report-supplier-purchase.php">Supplier Purchase </a></li>
                            <li><a href="report-client.php">Client </a></li>
                            <li><a href="report-client-rate.php">Client Rate </a></li>
                            <li><a href="report-client-order.php">Client Order </a></li>
                            <li><a href="report-client-sales.php">Client Sales </a></li>
                            <li><a href="report-bill.php">Bill Issue </a></li>
                            <li><a href="report-bill-details.php">Bill Details </a></li>
                            <li><a href="report-sales.php">Sales </a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Settings</a>
                        <ul class="submenu">
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="change_password.php">Setting</a></li>
                            <li><a href="backup_db.php">Backup Database</a></li>
                            <li><a href="functions/login.php?do=logout">Logout</a></li>
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
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote.min.js"></script>
<!-- Modal-Effect -->
<script src="<?php echo base_url();?>assets/plugins/custombox/js/custombox.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/custombox/js/legacy.min.js"></script>
<!-- Peity chart js -->
<script src="<?php echo base_url();?>assets/plugins/peity/jquery.peity.min.js"></script>
<!-- Sparkline chart -->
<script src="<?php echo base_url();?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tokeninput.js"></script>

<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-select2/js/select2.min.js" type="text/javascript"></script>


<script src="<?php echo base_url();?>assets/plugins/moment/moment.js"></script>
<script src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/pages/datatables.init.js"></script>


<script src="<?php echo base_url();?>assets/plugins/raphael/raphael-min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.blockUI.js"></script>

<!-- Dashboard 3 js -->
<script src="<?php echo base_url();?>assets/pages/jquery.dashboard_3.js"></script>
<script src="<?php echo base_url();?>assets/plugins/peity/jquery.peity.min.js"></script>

<!-- App core js -->
<script src="<?php echo base_url();?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>
<script src="<?php echo base_url();?>assets/pages/jquery.form-pickers.init.js"></script>



<script type="text/javascript">
    jQuery(document).ready(function($) {
        //decimal validation
        $(".decimal").keypress(function(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;
            return true;
        });
        jQuery('.inline-date').datepicker({
            defaultDate: new Date(),
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true,
            "setDate": 'now',
        });
        $('.selectpicker').selectpicker();
        $(".knob").knob();
        $(".fileinput").fileinput({
            showCaption: false,
            uploadAsync: false,
            overwriteInitial: true,
            browseLabel: "Browse Image",
            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
            showUpload: true,
            initialPreviewShowDelete: true,
            showUploadedThumbs: true,
            removeIcon: '<i class="fa fa-trash-o"></i> ',
            uploadUrl: "#",
            allowedFileExtensions: ["jpg", "png", "gif"],
        });
        $('.multiselect').multiselect({
            enableFiltering: true,
            includeSelectAllOption: true,
            width: 400,
        });
        $('.summernote').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });

    });
    function gettables()
    {
        $("#data-grid").dataTable().fnDraw();
    }
    function forminput(id)
    {

        $("#"+id+" button[type='submit']").text("loading...");

        $("#"+id+" button[type='submit']").attr("disabled","true");

        $.ajax({

            url: $("#"+id).attr("action"),

            type: "POST",

            data: new FormData($("#"+id)[0]),

            async: false,

            contentType: false,

            cache: false,

            processData:false,

            success: function(data) {

                gettables();

                $("#"+id+" button[type='submit']").text("Submit");

                $("#"+id+" button[type='submit']").removeAttr("disabled");

                $("[data-dismiss=modal]").trigger({ type: "click" });

            }

        });

        return false;



    }
    function select_2(id,url)
    {
        $('#'+id).select2({
            width: '100%',
            ajax: {
                url: url,
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, page) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            },
            escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
            minimumInputLength: 1,
        });
    }
    //................increment
    var increment = (function(n) {
        return function() {
            n += 1;
            return n;
        }
    }(0));
</script>