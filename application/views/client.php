<!-- Top Bar End -->
<!-- Begin page -->
<div class="wrapper">
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-12">
                        <div class="card-box">
                            <a href="#add" data-toggle="modal" class="pull-right btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-plus"></i> Add New</a>
                            <h4 class="text-dark header-title m-t-0">Client</h4>
                            <p class="text-muted m-b-30 font-13">
                            <hr />
                            </p>
                            <table id="data-grid" class="table table-striped table-bordered  responsive">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>														<th>Contact</th>														<th>Address</th>
                                    <th>City</th>														<th>State</th>
                                    <th>Pincode</th>														<th>GST No</th>														<th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container -->
        </div> <!-- content -->
        <!-- Footer -->

        <!-- End Footer -->            </div>
    <div id="add" class="modal" style="display: none;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form role="form" id="addform" class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return forminput('addform')" action="functions/client.php?do=add">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add new Client</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" required="" class="form-control">
                            </div>
                        </div>	<div class="form-group clearfix">		<label class="col-md-3 control-label">Email</label>		<div class="col-md-9">			<input type="email" name="email" class="form-control">		</div>	</div>
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Contact</label>
                            <div class="col-md-4">
                                <input type="number" min="0" name="contact" required="" class="form-control">
                            </div>
                        </div>	<div class="form-group clearfix">		<label class="col-md-3 control-label">Address</label>		<div class="col-md-9">			<textarea min="0" name="address" rows="4" class="form-control"></textarea>		</div>	</div>	<div class="form-group clearfix">		<label class="col-md-3 control-label">City</label>		<div class="col-md-9">			<input type="text" name="city" class="form-control">		</div>	</div>	<div class="form-group clearfix">		<label class="col-md-3 control-label">State</label>		<div class="col-md-9">			<input type="text" name="state" class="form-control">		</div>	</div>	<div class="form-group clearfix">		<label class="col-md-3 control-label">Pincode</label>		<div class="col-md-4">			<input type="number" name="pincode" min="0" class="form-control">		</div>	</div>	<div class="form-group clearfix">		<label class="col-md-3 control-label">GST No</label>		<div class="col-md-9">			<input type="text" name="gst_no" class="form-control">		</div>	</div>
                        <div class="form-group clearfix">
                            <label  class="col-md-3 control-label">Date</label>
                            <div class="col-md-4">
                                <input class="form-control inline-date" value="05-08-2018" placeholder="mm/dd/yyyy" required type="text" name="date">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Status</label>
                            <div class="col-md-3">
                                <select name="status" required="" class="form-control">
                                    <option value="1">Enable</option>
                                    <option value="0">Disable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger button-continue-shopping" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary button-checkout">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="edit" class="modal" style="display: none;">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="editdiv">
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
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
</body>
</html><script type="text/javascript" language="javascript" >
    $(document).ready(function() {
        show();
    });
    //===========================>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    function show()
    {
        var dataTable = $('#data-grid').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax":{
                url :"functions/client.php?do=show", // json datasource
                type: "post",  // method  , by default get
                error: function(){  // error handling
                    $(".data-grid-error").html("");
                    $("#data-grid").append('<tbody class="data-grid-error"><tr><th colspan="6" align="center">No data found in the server</th></tr></tbody>');
                    $("#data-grid_processing").css("display","none");
                }
            }
        } );
    }
    //
    function edit(id)
    {
        $("#editdiv").html("<center>loading...</center>");
        $.ajax({
            url:'functions/client.php?do=editform',
            type:'post',
            data:'id='+id,
            success:function(msg)
            {
                $("#editdiv").html(msg);
                jQuery('.inline-date').datepicker({
                    defaultDate: new Date(),
                    format: "dd-mm-yyyy",
                    autoclose: true,
                    todayHighlight: true,
                    "setDate": 'now',
                });
            }
        });
    }
    //
    function delete_data(id)
    {
        x = confirm('Are you sure want to delete?');
        if(x==true)
        {
            $.ajax({
                url:'functions/client.php?do=delete',
                type:'post',
                data:'id='+id,
                success:function(msg)
                {
                    if(msg==1)
                    {
                        gettables();
                    }
                    else
                    {
                        alert(msg);
                    }
                }
            });
        }
        else
        {
        }
    }
</script>