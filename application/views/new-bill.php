<style>
    #product_table input, #product_table th,#product_table td
    {
        font-size:11px;
        padding:3px;
    }
    #product_table th
    {
        font-size:12px !important;
        padding:3px;
        text-align:center;
        font-weight:bold;
    }
</style>
<!-- End Navigation Bar-->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="addform" name="addform" action="<?php echo base_url();?>welcome/newprebill1/<?php echo $invoice_no;?>" class="form-horizontal" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="color: #fff;"><span class="fa fa-file-o"></span> Create new Bill</h3>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">CLIENT NAME</label>
                                    <div class="col-md-5">
                                        <select name="client_id" id="client" class="form-control" >
                                            <option value="<?php echo $client_name;?>"><?php echo $client_name;?></option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">CONTACT</label>
                                    <div class="col-md-5">
                                        <input name="contact" id="contact" class="form-control" required type="text" value="<?php echo $contact;?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">EMAIL</label>
                                    <div class="col-md-5">
                                        <input name="email" id="email" class="form-control" type="email"  value="<?php echo $email;?>" readonly >
                                    </div>
                                </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">ADDRESS</label>
                                    <div class="col-md-5">
                                        <textarea name="address" id="address" rows="5" class="form-control" readonly> <?php echo $address;?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">STATE</label>
                                    <div class="col-md-5">
                                        <input name="state" id="state" class="form-control" type="text"  value="<?php echo $state;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">CITY</label>
                                    <div class="col-md-5">
                                        <input name="city" id="city" class="form-control" type="text"  value="<?php echo $city;?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">PINCODE</label>
                                    <div class="col-md-5">
                                        <input name="pincode" id="pincode" class="form-control" type="number"  value="<?php echo $pincode;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">GST NO</label>
                                    <div class="col-md-5">
                                        <input name="gst_no" id="gst_no" readonly class="form-control" type="text"  value="<?php echo $gst_no;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label  class="col-md-4 control-label">DATE</label>
                                    <div class="col-md-5">
                                        <input class="form-control"  placeholder="mm/dd/yyyy" required id="datepicker-autoclose" type="text" name="date"  value="<?php echo $invoice_date;?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label  class="col-md-4 control-label">INVOICE DATE</label>
                                    <div class="col-md-5">
                                        <input type="text" name="invoice_date"   value="<?php echo $invoice_date;?>" class="form-control inline-date" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label  class="col-md-4 control-label">Tpt. Co.</label>
                                    <div class="col-md-5">
                                        <input type="text" name="tpt_co" class="form-control"  value="<?php echo $tpt_co;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label  class="col-md-4 control-label">Gr. No.</label>
                                    <div class="col-md-5">
                                        <input type="text" name="gr_no" class="form-control"  value="<?php echo $gr_no;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label  class="col-md-4 control-label">Way Bill Ref.</label>
                                    <div class="col-md-5">
                                        <input type="text" name="way_bill_ref" class="form-control"  value="<?php echo $way_bill_ref;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label  class="col-md-4 control-label">Place of Order.</label>
                                    <div class="col-md-5">
                                        <input type="text" name="place_of_order" class="form-control"  value="<?php echo $place_of_order;?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <table id="product_table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr class="nobrd">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th colspan="2" class="text-center col-md-1">CGST</th>
                                    <th colspan="2" class="text-center col-md-1">SGST</th>
                                    <th colspan="2" class="text-center col-md-1">IGST</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th class="text-left required col-md-2">Product NAME</th>
                                    <th class="text-left">HSN Code</th>
                                    <th class="text-left">Unit</th>
                                    <th class="text-left">Rate</th>
                                    <th class="text-left">Qty</th>
                                    <th class="text-left">Before GST.</th>
                                    <th class="text-left">GST Type</th>
                                    <th class="text-left">Rate</th>
                                    <th class="text-left">Amount</th>
                                    <th class="text-left">Rate</th>
                                    <th class="text-left">Amount</th>
                                    <th class="text-left">Rate</th>
                                    <th class="text-left">Amount</th>
                                    <th class="text-left">GST Amt.</th>
                                    <th class="text-left">Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $total=0; $tax=0;$basic=0;foreach($pm->result() as $row){?>
                                <tr id="product_table-row0">
                                    <td><select id="product_id0" name="product_id[]" class="form-control" ><option value="<?php echo $row->name;?>"><?php echo $row->name;?></option> </select></td>
                                    <td><input type="text" required class="form-control" value="<?php echo $row->product_id;?>" readonly></td>
                                    <td><input type="text" required class="form-control" name="weight[]" value="<?php echo $row->weight;?>" readonly ></td>
                                    <td><input type="text" required class="form-control decimal" name="rate[]" value="<?php echo $row->rate;?>" readonly></td>
                                    <td><input type="text" required class="form-control decimal" name="quantity[]" value="<?php echo $row->quantity;?>" readonly></td>
                                    <td><input type="text" required readonly class="form-control basic_amount decimal" name="basic_amount[]"  value="<?php echo $row->basic_amount;?>" readonly></td>
                                    <td><input type="text" required class="form-control" name="gst_type[]" value="<?php echo $row->gst_type;?>"readonly  ></td>
                                    <td><input type="text" required class="form-control" readonly name="cgst[]" value="<?php echo $row->cgst;?>"  ></td>
                                    <td><input type="text" required class="form-control" readonly name="cgst_amount[]"  value="<?php echo $row->cgst_amount;?>" ></td>
                                    <td><input type="text" required class="form-control" readonly name="sgst[]" value="<?php echo $row->sgst;?>" ></td>
                                    <td><input type="text" required class="form-control" readonly name="sgst_amount[]" value="<?php echo $row->sgst_amount;?>" ></td>
                                    <td><input type="text" required class="form-control" readonly name="igst[]"  value="<?php echo $row->igst;?>" ></td>
                                    <td><input type="text" required class="form-control" readonly name="igst_amount[]" value="<?php echo $row->igst_amount;?>" ></td>
                                    <td><input type="text" required readonly class="form-control taxable_amount decimal" name="taxable_amount[]" value="<?php echo $row->taxable_amount;?>" ></td>
                                    <td><input type="text" required class="form-control total decimal" name="total_amount[]" value="<?php echo $row->total;?>" readonly></td>
                                    <td></td>
                                </tr>
                                <?php $total+=$row->total;$tax+=$row->taxable_amount;$basic+=$row->basic_amount; }?>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                            <!--end data-role="dynamic-fields-->
                            <div class="clearfix">
                                <input type="hidden" id="all_total" />
                                <div class="col-md-2">
                                    <label style="color: #000;">Total Before GST Amt.</label>
                                    <input type="text" name="sub_total" readonly  value="<?php echo $basic;?>" readonly">
                                </div>
                                <div class="col-md-2">
                                    <label style="color: #000;">Total GST Amt.</label>
                                    <input type="text" name="total_taxable_amount" readonly id="total_taxable_amount"  value="<?php echo $tax;?>" readonly>
                                </div>
                                <div class="col-md-2">
                                    <label style="color: #000;">Bill Amount</label>
                                    <input type="text" name="total" readonly value="<?php echo $total;?>" readonly>
                                </div>
                                <div class="col-md-2">
                                    <label style="color: #000;">Paid Amount</label>
                                    <input type="text" name="paid_amount1"  value="<?php echo $paid_amount;?>" readonly>
                                </div>
                                <div class="col-md-2">
                                    <label style="color: #000;">Enter Amount</label>
                                    <input type="text" name="paid_amount"   >
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <div class="panel-footer text-right">
                            <input name="submit" class="btn btn-primary btn-rounded" type="submit" value="Submit">
                            <a href="cancelbill/<?php echo $bill_id;?>/<?php echo $bill_detail_id;?>" class="btn btn-danger btn-rounded">Cancel</a>
                        </div>
                    </div> <!-- end card-box -->

                </form>

            </div>
        </div>
        <!-- Footer -->

        <!-- End Footer -->
    </div>
</div>

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
<script>
    $(function() {
        select_2("client",'functions/client.php?do=search_client');
        select_2("product_id0",'functions/product.php?do=search_product');
    });
    //func
    function client_detail(val)
    {
        $.ajax({
            url:"functions/client.php?do=client_detail",
            type:"post",
            dataType: 'json',
            data:"id="+val,
            success:function(res)
            {
                $("#contact").val(res.contact);
                $("#email").val(res.email);
                $("#address").val(res.address);
                $("#city").val(res.city);
                $("#state").val(res.state);
                $("#pincode").val(res.pincode);
                $("#gst_no").val(res.gst_no);
            }
        });
    }
    //product func
    var product_row = 1;
    function addProductRow() {
        html  = '<tr id="product_table-row' + product_row + '">';
        html += '    <td class="left"><select id="product_id' + product_row + '" name="product_id[]" class="form-control" required onchange="product_client_detail('+product_row+',this.value)"><option value="">Select</option> </select></td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control" name="product_code[]" readonly id="product_code'+product_row+'" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control" name="weight[]" readonly id="weight'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control decimal" name="rate[]" id="rate'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';

        html += '<td class="left">';
        html += '<input type="text" required class="form-control decimal" name="quantity[]" value="1" min="1" id="quantity'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control basic_amount decimal" readonly name="basic_amount[]" id="basic_amount'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control" name="gst_type[]" readonly id="gst_type'+product_row+'" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control" name="cgst[]" readonly  id="cgst'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control decimal" readonly name="cgst_amount[]" id="cgst_amount'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control" name="sgst[]" readonly  id="sgst'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control decimal" readonly name="sgst_amount[]" id="sgst_amount'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control" name="igst[]" readonly  id="igst'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control decimal" readonly name="igst_amount[]" id="igst_amount'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control decimal taxable_amount" readonly name="taxable_amount[]" id="taxable_amount'+product_row+'" onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required readonly class="form-control total decimal" name="total_amount[]" id="total_amount'+product_row+'"  onchange="calAmount('+product_row+')" >';
        html += '</td>';
        html += '    <td class="left"><button onclick="$(\'#product_table-row' + product_row + '\').remove();calAmount('+product_row+');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-minus-circle"></i></button></td>';
        html += '  </tr>';
        $('#product_table tbody').append(html);
        select_2("product_id"+product_row,'functions/product.php?do=search_product');
        //decimal validation
        $(".decimal").keypress(function(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;

            return true;
        });
        product_row++;
    }
    function product_client_detail(id,val)
    {
        $.ajax({
            url:"functions/product.php?do=product_client_detail",
            type:"post",
            dataType: 'json',
            data:"id="+val+"&client_id="+$("#client").val(),
            success:function(res)
            {

                if(res.client_rate=="")
                {

                    var confrm = confirm("This item is not taken to this client. Do you want to keep this item?");
                    if(confrm==true)
                    {
                        $("#product_code"+id).val(res.product_code);
                        $("#rate"+id).val(res.rate);
                        $("#weight"+id).val(res.weight);
                        $("#gst_type"+id).val(res.gst_type);
                        $("#cgst"+id).val(res.cgst);
                        $("#sgst"+id).val(res.sgst);
                        $("#igst"+id).val(res.igst);
                        calAmount(id);
                    }
                    else
                    {
                        if(id > 0)
                        {
                            $('#product_table-row' + id ).remove();
                        }
                    }
                }
                else
                {
                    $("#product_code"+id).val(res.product_code);
                    $("#rate"+id).val(res.client_rate);
                    $("#weight"+id).val(res.weight);
                    $("#gst_type"+id).val(res.gst_type);
                    $("#cgst"+id).val(res.cgst);
                    $("#sgst"+id).val(res.sgst);
                    $("#igst"+id).val(res.igst);
                    calAmount(id);
                }

            }
        });
    }
    function calAmount(new_id)
    {
        //total calc
        var rate = parseFloat($("#rate"+new_id).val()) || 0;
        var quantity = parseFloat($("#quantity"+new_id).val()) || 0;
        $("#basic_amount"+new_id).val((rate*quantity).toFixed(3));
        var basic_amount = parseFloat($("#basic_amount"+new_id).val()) || 0;
        var product_cgst = parseFloat($("#cgst"+new_id).val()) || 0;
        var product_sgst = parseFloat($("#sgst"+new_id).val()) || 0;
        var product_igst = parseFloat($("#igst"+new_id).val()) || 0;
        var product_gst = (product_cgst+product_sgst+product_igst);
        $("#cgst_amount"+new_id).val(((basic_amount*product_cgst)/100).toFixed(2));
        $("#sgst_amount"+new_id).val(((basic_amount*product_sgst)/100).toFixed(2));
        $("#igst_amount"+new_id).val(((basic_amount*product_igst)/100).toFixed(2));
        var total_gst = rate*quantity*product_gst/100;
        $("#taxable_amount"+new_id).val(total_gst.toFixed(3));
        var total_temp = rate*quantity+total_gst;
        $("#total_amount"+new_id).val(total_temp.toFixed(3));
        //get all total
        basic_total = 0;
        $(".basic_amount").each(function(){
            vall = $(this).val();
            basic_total += Number(vall);
        });
        taxable_amount = 0;
        $(".taxable_amount").each(function(){
            vall = $(this).val();
            taxable_amount += Number(vall);
        });
        total = 0;
        $(".total").each(function(){
            vall = $(this).val();
            total += Number(vall);
        });
        $("#sub_total").val(basic_total.toFixed(3));
        $("#total_taxable_amount").val(taxable_amount.toFixed(3));
        $("#bill_amount").val(total.toFixed(3));
    }
</script>