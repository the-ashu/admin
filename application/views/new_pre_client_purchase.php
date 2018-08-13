<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="newpreclient1" class="form-horizontal" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="color: #fff;"><span class="fa fa-file-o"></span> Create new Client Product Rate</h3>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">Client Name</label>
                                    <div class="col-md-5">
                                        <select name="client_name"  class="form-control" required>
                                            <?php foreach($client->result() as $row){?>
                                            <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label  class="col-md-4 control-label">Date</label>
                                    <div class="col-md-4">
                                        <input class="form-control inline-date"  placeholder="mm/dd/yyyy" required type="text" name="date">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">Product Name</label>
                                    <div class="col-md-5">
                                        <select name="product_name" id="client" class="form-control" required>
                                            <?php foreach($product->result() as $row){?>
                                                <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                            </div>


                            <!--end data-role="dynamic-fields-->

                            <br><br>
                        </div>
                        <div class="panel-footer text-right">
                            <input name="submit" class="btn btn-primary btn-rounded" type="submit" value="Submit">
                            <a href="welcome/clientproductrate" class="btn btn-danger btn-rounded">Cancel</a>
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
        //decimal validation
    });
    //func
    //product func
    function product_client_detail(id,val)
    {
        $.ajax({
            url:"functions/product.php?do=product_client_detail",
            type:"post",
            dataType: 'json',
            data:"id="+val+"&client_id="+$("#client").val(),
            success:function(res)
            {
                $("#weight"+id+" option[value='"+res.weight+"']").attr('selected','selected');;
                $("#rate"+id).val(res.rate);
                $("#cgst"+id).val(res.cgst);
                $("#sgst"+id).val(res.sgst);
                $("#igst"+id).val(res.igst);
            }
        });
    }
    var product_row = 1;
    function addProductRow() {
        html  = '<tr id="product_table-row' + product_row + '">';
        html += '    <td class="left"><select id="product_id' + product_row + '" name="product_id[]" class="form-control" required onchange="product_client_detail('+product_row+',this.value)"><option value="">Select</option> </select></td>';
        html += '</td>';
        html += '<td class="left">';
        html += '<select name="weight[]" class="form-control" required id="weight'+product_row+'"><option value="">Select</option><option value="TON">TON</option><option value="CFT">CFT</option><option value="MQ">MQ</option><option value="BAG">BAG</option><option value="PCS.">PCS.</option></select>';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" required class="form-control decimal" name="rate[]" id="rate'+product_row+'" >';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" min="0" name="cgst[]" value="0" class="form-control decimal" id="cgst'+product_row+'">';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" min="0" name="sgst[]" value="0" class="form-control decimal" id="sgst'+product_row+'">';
        html += '</td>';
        html += '<td class="left">';
        html += '<input type="text" min="0" name="igst[]" value="0" class="form-control decimal" id="igst'+product_row+'">';
        html += '</td>';
        html += '    <td class="left"><button onclick="$(\'#product_table-row' + product_row + '\').remove();" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-minus-circle"></i></button></td>';
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
</script>