<style>
    textarea
    {
        resize: none;
        min-height: 10px !important;
    }
    .nobrd th,td{
        border: none !important;
    }
    .form-control
    {
        height: inherit;
        padding: 0px;
        text-align: left;
        font-size: inherit;
        color: inherit;
    }
    .total_th
    {
        width: 85px;
    }
    #printdiv
    {
        font-size:14px !important;
    }
    @media print {
        textarea {height: inherit !important;}
        #printdiv:last-child {
            page-break-after: auto;
        }
        .wrapper {
            padding-top: 0px;
        }
        .panel {
            border: none;
            margin-bottom: 0px;
        }
        .panel .panel-body {
            padding: 5px;
        }
        .form-control
        {
            border: 0px;
            height: inherit;
            padding: 0px;
            text-align: left;
            font-size: inherit;
            color: inherit;
        }
        #printdiv
        {
            font-size:14px;
        }
        .total_th
        {
            width:130px !important;
        }
    }
    .sub_total h5
    {
        margin: 5px 0;
        font-size:13px;
    }
    hr {
        margin-top: 5px;
        margin-bottom: 5px;
        border: 0;
        border-top: 1px solid #eee;
    }
</style>
<div class="wrapper">
    <div class="container" style="width:1000px">


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">
                        <h4>Invoice</h4>
                    </div> -->
                    <div class="panel-body">
                        <div id="printdiv" class="print">
                            <div class="clearfix row">
                                <div class="clearfix col-md-12 text-center">
                                    <hr />
                                    <b>TAX INVOICE</b>
                                    <hr />
                                </div>
                                <div class="clearfix">
                                    <div class="m-b-5 m-l-10 pull-left">
                                        <b><h3><b><?php echo $admin->company_name;?></b></h3></b><br>
                                        <b>GSTIN: </b> <?php echo $admin->gst_no;?></b><br>
                                        <b>Reg Off.</b> <?php echo $admin->reg_office;?><br>
                                        <b>Corresponding Address: </b> <?php echo $admin->street_address;?><br>
                                        <b>Email: </b> <?php echo $admin->email;?> <br><b>Mobile: </b> <?php echo $admin->phone_no;?><br>
                                    </div>
                                    <div class="pull-right text-right">
                                        <div class="col-md-12">
                                            <strong>Invoice No.
                                                <?php echo $l->invoice_no;?></strong><br />
                                            <strong>Invoice Date: <?php echo $l->date?></strong> <br>
                                            <select class="hidden-print hidden" onchange="window.location='?id=Nw==&pc='+this.value">
                                                <option value="T1JJR0lOQUwgRk9SIFJFQ0lQSUVOVA==" >ORIGINAL FOR RECIPIENT</option>
                                                <option value="RFVQTElDQVRFIEZPUiBUUkFOU1BPUlRFUg==" >DUPLICATE FOR TRANSPORTER</option>
                                                <option value="VFJJUExJQ0FURSBGT1IgU1VQUExJRVI=" >TRIPLICATE FOR SUPPLIER</option>
                                            </select><br>
                                            ORIGINAL / DUPLICATE / TRIPLICATE						</div>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix m-b-5">
                                <hr />
                            </div>

                            <div class="clearfix row">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4"><strong>Name: </strong></div> <div class="col-md-8 col-sm-8 col-xs-8"><b><?php echo $l->name;?></b></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4"><strong>Address: </strong></div> <div class="col-md-8 col-sm-8 col-xs-8"><?php echo $l->city;?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4"><strong>Buyer GSTIN: </strong></div> <div class="col-md-8 col-sm-8 col-xs-8"><?php echo $l->gst_no;?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4"><strong>State: </strong></div> <div class="col-md-8 col-sm-8 col-xs-8"><?php echo $l->state;?></div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5"><strong>Tpt. Co.</strong></div><?php echo $l->tpt_co;?> <div class="col-md-7 col-sm-7 col-xs-7"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5"><strong>Gr. No.</strong></div><?php echo $l->gr_no;?> <div class="col-md-7 col-sm-7 col-xs-7"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5"><strong>Date: </strong></div><?php echo $l->date;?> <div class="col-md-7 col-sm-7 col-xs-7"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5"><strong>Way Bill Ref.</strong></div><?php echo $l->way_bill_ref;?> <div class="col-md-7 col-sm-7 col-xs-7"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5"><strong>Place of Supply: </strong></div><?php echo $l->place_of_order;?> <div class="col-md-7 col-sm-7 col-xs-7"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="m-h-5"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped m-t-30">
                                            <thead>
                                            <tr class="nobrd">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th colspan="4" class="text-center col-md-2">SGST</th>
                                                <th colspan="1" class="text-center col-md-2">CGST</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <th>Batch No.</th>
                                                <th>Man./Exp.</th>
                                                <th>HSN Code</th>
                                                <th>Unit</th>
                                                <th>Rate</th>
                                                <th>Qty</th>
                                                <th>Basic Amt.</th>
                                                <th class="col-md-1">Rate</th>
                                                <th class="col-md-1">Amt.</th>
                                                <th class="col-md-1">Rate</td>
                                                <th class="col-md-1">Amt.</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1;$total=0;$tax=0;$basic=0; foreach($pm->result() as $row){?>
                                            <tr>
                                                <td><?php echo $row->name;?> </td>
                                                <td><?php echo $row->batch;?> </td>
                                                <td><?php echo $row->manufacture;?>/<?php echo $row->expire;?> </td>
                                                <td><?php echo $row->product_code;?></td>
                                                <td><?php echo $row->weight;?></td>
                                                <td><?php echo $row->rate;?></td>
                                                <td><?php echo $row->quantity;?></td>
                                                <td><?php echo $row->basic_amount;?></td>
                                                <td><?php echo $row->sgst;?></td>
                                                <td><?php echo $row->sgst_amount;?></td>
                                                <td><?php echo $row->cgst;?></td>
                                                <td><?php echo $row->cgst_amount;?></td>
                                                <td><?php echo $row->total;?></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                           <?php /*?> <tr class="nobrd">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Total:</th>
                                                <th><?php echo $row->rate;?></th>
                                                <th></th>
                                                <th class="text-left col-md-2"><?php echo $row->sgst_amount;?></th>
                                                <th></th>
                                                <th class="text-left col-md-2"><?php echo $row->cgst_amount;?></th>
                                                <th></th>
                                                <th class="text-left col-md-2"><?php echo $row->igst_amount;?></th>
                                                <th><?php echo $row->total;?></th>
                                            </tr><?php */?>
                                            <?php $i++;$total+=$row->total;$basic+=$row->basic_amount;$tax+=$row->taxable_amount; } ?>
                                            </tfoot>
                                            <tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-7 col-sm-7 col-xs-7">

                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="sub_total">
                                        <h4 class="col-md-10 col-sm-10 col-xs-10"><b>Total Before GST Amt.:</b></h4>
                                        <h4 class="col-md-2 col-sm-2 col-xs-2"><b><?php echo $basic;?></b></h4>

                                        <h4 class="col-md-10 col-sm-10 col-xs-10"><b>Total GST Amt.:</b></h4>
                                        <h4 class="col-md-2 col-sm-2 col-xs-2"><b><?php echo $tax;?></b></h4>

                                    </div>
                                    <hr>
                                    <h4 class="col-md-10 col-sm-10 col-xs-10"><b>Total Bill Amount:</b></h4> <h4 class="col-md-2 col-sm-2 col-xs-2"><b><?php echo $total1+$discount;?></b></h4>
                                    <h4 class="col-md-10 col-sm-10 col-xs-10"><b>Discount Amount:</b></h4> <h4 class="col-md-2 col-sm-2 col-xs-2"><b><?php echo $discount;?></b></h4>
                                    <h4 class="col-md-10 col-sm-10 col-xs-10"><b>Total Invoice Amount:</b></h4> <h4 class="col-md-2 col-sm-2 col-xs-2"><b><?php echo $total1;?></b></h4>
                                </div>
                            </div>
                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-12"><hr /></div>
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <br><br>
                                    <hr>
                                    <div class="text-center"><b>Terms and Conditions</b></div>
                                    Goods once sold will not be taken back.<br>
                                   Once goods sold from our kendra , There will be no any type of responsibility for goods.<br>
                                   Since we are just distributor so we are not responsible for quality of goods in case of damage.<br>
                                </div>

                                <div class="col-md-5 col-sm-5 col-xs-5 text-center">
                                    <h4>For,<b> <?php echo $admin->company_name;?></b></h4>
                                    <br><br><br><br><br>
                                    Authorised Signatory<br><br>
                                    <center><b>E. & O. E. </b></center>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="hidden-print">
                            <div class="pull-right">
                                <a href="javascript:window.print();" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a> <a href="<?php echo base_url();?>welcome/newbillprint" target="_blank" class="btn btn-warning waves-effect waves-light"><i class="fa fa-copy"></i></a> <a href="http://www.gmail.com" target="_blank" class="btn btn-primary waves-effect waves-light"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer -->
        <!-- End Footer -->
    </div>
</div>

<!-- jQuery  -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

<!--    <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script> -->


<!--Summernote js-->
<script src="assets/plugins/summernote/summernote.min.js"></script>
<!-- Modal-Effect -->
<script src="assets/plugins/custombox/js/custombox.min.js"></script>
<script src="assets/plugins/custombox/js/legacy.min.js"></script>
<!-- Peity chart js -->
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<!-- Sparkline chart -->
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="assets/plugins/fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script src="assets/plugins/multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/js/jquery.tokeninput.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select2/js/select2.min.js" type="text/javascript"></script>


<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/pages/datatables.init.js"></script>


<script src="assets/plugins/raphael/raphael-min.js"></script>

<script src="assets/js/jquery.blockUI.js"></script>

<!-- Dashboard 3 js -->
<script src="assets/pages/jquery.dashboard_3.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>

<!-- App core js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/pages/jquery.form-pickers.init.js"></script>



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
<script type="text/javascript">
    function auto_update(name,value)
    {
        $.ajax({
            url:"functions/sales.php?do=invoice_detail",
            type:"post",
            data:"id=7&name="+name+"&value="+value,
            success:function(res)
            {
            }
        });
    }
    function printDiv(report_table) {
        var printContents = document.getElementById(report_table).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>