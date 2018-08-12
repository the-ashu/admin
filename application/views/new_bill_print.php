<style>
    textarea
    {
        resize: none;
        min-height: 10px !important;
    }
    th,td{
        padding:10px !important;
        text-align:center;
    }
    .form-control
    {
        height: inherit;
        padding: 0px;
        text-align: left;
        font-size: inherit;
        color: inherit;
    }
    .dotted_border
    {
        border-bottom:  1px dotted;
        margin-top: 22px;
    }
    .total_th
    {
        width: 85px;
    }
    .line_height
    {
        line-height:30px !important;
    }
    .no_border
    {
        border-top:0px !important;
        border-bottom:0px !important;
        border-left:1px solid #000 !important;
        border-right:0px !important;
    }
    .right_border
    {
        border-top:0px !important;
        border-bottom:0px !important;
        border-right:1px solid #000 !important;
        border-left:1px solid #000 !important;
    }
    .th_border
    {
        border:1px solid #000 !important;
    }
    #printdiv
    {
        font-size:14px !important;
    }
    @media print {
        .no_border
        {
            border-top:0px !important;
            border-bottom:0px !important;
        }
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
                                        <b style="font-size: 20px;"> <img src="<?php echo base_url();?>assets/images/users/5b5c40ddf26e5.png"  class="img-circle" height="70px" width="50"> Patel And Sons Krishi Sewa Kendra</b><br>
                                        <b>Reg Off.</b> ward no. 3 near galla mandi ,NH 12 main road mandideep<br>
                                        <b>Corresponding Address: </b> ward no. 3 near galla mandi ,NH 12 main road mandideep<br>
                                        <b>Email: </b> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e49485908188ca928d96818a809685ca9485908188a48389858d88ca878b89">[email&#160;protected]</a> <br><b>Mobile: </b> 9589236338<br>
                                    </div>
                                    <div class="pull-right line_height">
                                        <div class="col-md-12">
                                            <strong>Invoice No. </strong><br />
                                            <strong>Invoice Date: </strong> <br>
                                            <select class="hidden-print hidden" onchange="window.location='?id=Ng==&pc='+this.value">
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

                            <div class="clearfix row line_height">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Name </strong></div> <div class="pull-right dotted_border" style="width: 450px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Address </strong></div> <div class="pull-right dotted_border" style="width: 450px;"><b></b></div>
                                        <div class="pull-right dotted_border" style="width: 450px;margin:40px 0"><b></b></div>

                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>State </strong></div> <div class="pull-right dotted_border" style="width: 450px;"><b></b></div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Tpt. Co.</strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Gr. No.</strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Date: </strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Way Bill Ref.</strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Place of Supply: </strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                </div>

                            </div>
                            <div class="m-h-5"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table  m-t-30">
                                            <thead>
                                            <tr>
                                                <th class="th_border" width="10%">SL No.</th>
                                                <th class="th_border" width="35%">Name</th>
                                                <th class="th_border" width="15%">HSN Code</th>
                                                <th class="th_border" width="10%">Unit</th>
                                                <th class="th_border" width="10%">Rate</th>
                                                <th class="th_border" width="10%">Qty</th>
                                                <th class="th_border">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th class="th_border"></th>
                                                <th class="th_border"></th>
                                                <th class="th_border"></th>
                                                <th class="th_border"></th>
                                                <th class="th_border" colspan="2">TOTAL:</th>
                                                <th class="th_border"></th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-7 col-sm-7 col-xs-7">

                                    <br><br>
                                </div>

                            </div>

                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-12"><hr /></div>
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div class="text-center"><b>Invoice Total in words</b></div><br>
                                    <div class="text-center"><b><div class="dotted_border"><b>&nbsp;</b></div></b></div>
                                    <br><br>
                                    <hr>
                                    <div class="text-center"><b>Terms and Conditions</b></div>
                                    Interest @ 24% per annum will be charged.<br>
                                    Goods once sold will not be taken back.<br>
                                    All the dispute will be settled In Kolkata <b>JURISDICTION</b> only.<br>

                                </div>

                                <div class="col-md-5 col-sm-5 col-xs-5 text-center">
                                    <h5>For, PATEL AND SONS KRISHI SEWA KENDRA</h5>
                                    <br><br><br><br><br>
                                    Authorised Signatory<br><br>
                                    <center><b>E. & O. E. </b></center>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="hidden-print">
                            <div class="pull-right">
                                <a href="javascript:window.print();" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer -->
        <footer class="footer text-right hidden-print">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        © 2017. All rights reserved.
                    </div>
                    <div class="col-xs-6 text-right">
                        Powered By <a href="http://ebiosketch.com/" class="text-white text-bold" target="_blank"> <b>Ebiosketch</b></a>
                    </div>
                </div>
            </div>
        </footer>
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
</body>
</html><script type="text/javascript">
    function auto_update(name,value)
    {
        $.ajax({
            url:"functions/sales.php?do=invoice_detail",
            type:"post",
            data:"id=6&name="+name+"&value="+value,
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
</script><style>
    textarea
    {
        resize: none;
        min-height: 10px !important;
    }
    th,td{
        padding:10px !important;
        text-align:center;
    }
    .form-control
    {
        height: inherit;
        padding: 0px;
        text-align: left;
        font-size: inherit;
        color: inherit;
    }
    .dotted_border
    {
        border-bottom:  1px dotted;
        margin-top: 22px;
    }
    .total_th
    {
        width: 85px;
    }
    .line_height
    {
        line-height:30px !important;
    }
    .no_border
    {
        border-top:0px !important;
        border-bottom:0px !important;
        border-left:1px solid #000 !important;
        border-right:0px !important;
    }
    .right_border
    {
        border-top:0px !important;
        border-bottom:0px !important;
        border-right:1px solid #000 !important;
        border-left:1px solid #000 !important;
    }
    .th_border
    {
        border:1px solid #000 !important;
    }
    #printdiv
    {
        font-size:14px !important;
    }
    @media print {
        .no_border
        {
            border-top:0px !important;
            border-bottom:0px !important;
        }
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
                                        <b style="font-size: 20px;"> <img src="assets/images/users/5b6d9fde76726.png"  class="img-circle" height="70px" width="50"> Patel And Sons Krishi Sewa Kendra</b><br>
                                        <b>Reg Off.</b> ward no. 3 near galla mandi ,NH 12 main road mandideep<br>
                                        <b>Corresponding Address: </b> ward no. 3 near galla mandi ,NH 12 main road mandideep<br>
                                        <b>Email: </b> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e49485908188ca928d96818a809685ca9485908188a48389858d88ca878b89">[email&#160;protected]</a> <br><b>Mobile: </b> 9589236338<br>
                                    </div>
                                    <div class="pull-right line_height">
                                        <div class="col-md-12">
                                            <strong>Invoice No. </strong><br />
                                            <strong>Invoice Date: </strong> <br>
                                            <select class="hidden-print hidden" onchange="window.location='?id=Ng==&pc='+this.value">
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

                            <div class="clearfix row line_height">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Name </strong></div> <div class="pull-right dotted_border" style="width: 450px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Address </strong></div> <div class="pull-right dotted_border" style="width: 450px;"><b></b></div>
                                        <div class="pull-right dotted_border" style="width: 450px;margin:40px 0"><b></b></div>

                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>State </strong></div> <div class="pull-right dotted_border" style="width: 450px;"><b></b></div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Tpt. Co.</strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Gr. No.</strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Date: </strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Way Bill Ref.</strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left"><strong>Place of Supply: </strong></div> <div class="pull-right dotted_border" style="width: 250px;"><b></b></div>
                                    </div>
                                </div>

                            </div>
                            <div class="m-h-5"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table  m-t-30">
                                            <thead>
                                            <tr>
                                                <th class="th_border" width="10%">SL No.</th>
                                                <th class="th_border" width="35%">Name</th>
                                                <th class="th_border" width="15%">HSN Code</th>
                                                <th class="th_border" width="10%">Unit</th>
                                                <th class="th_border" width="10%">Rate</th>
                                                <th class="th_border" width="10%">Qty</th>
                                                <th class="th_border">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            <tr>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="no_border"></td>
                                                <td class="right_border"></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th class="th_border"></th>
                                                <th class="th_border"></th>
                                                <th class="th_border"></th>
                                                <th class="th_border"></th>
                                                <th class="th_border" colspan="2">TOTAL:</th>
                                                <th class="th_border"></th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-7 col-sm-7 col-xs-7">

                                    <br><br>
                                </div>

                            </div>

                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-12"><hr /></div>
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div class="text-center"><b>Invoice Total in words</b></div><br>
                                    <div class="text-center"><b><div class="dotted_border"><b>&nbsp;</b></div></b></div>
                                    <br><br>
                                    <hr>
                                    <div class="text-center"><b>Terms and Conditions</b></div>
                                    Interest @ 24% per annum will be charged.<br>
                                    Goods once sold will not be taken back.<br>
                                    All the dispute will be settled In Kolkata <b>JURISDICTION</b> only.<br>

                                </div>

                                <div class="col-md-5 col-sm-5 col-xs-5 text-center">
                                    <h5>For, PATEL AND SONS KRISHI SEWA KENDRA</h5>
                                    <br><br><br><br><br>
                                    Authorised Signatory<br><br>
                                    <center><b>E. & O. E. </b></center>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="hidden-print">
                            <div class="pull-right">
                                <a href="javascript:window.print();" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer -->
        <footer class="footer text-right hidden-print">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        © 2017. All rights reserved.
                    </div>
                    <div class="col-xs-6 text-right">
                        Powered By <a href="http://ebiosketch.com/" class="text-white text-bold" target="_blank"> <b>Ebiosketch</b></a>
                    </div>
                </div>
            </div>
        </footer>
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
</body>
</html><script type="text/javascript">
    function auto_update(name,value)
    {
        $.ajax({
            url:"functions/sales.php?do=invoice_detail",
            type:"post",
            data:"id=6&name="+name+"&value="+value,
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