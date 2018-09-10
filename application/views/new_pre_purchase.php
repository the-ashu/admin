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
                <form id="addform" name="addform" action="newprepurchase" class="form-horizontal" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="color: #fff;"><span class="fa fa-file-o"></span> Create new purchase product</h3>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">SUPPLIER NAME</label>
                                    <div class="col-md-5">
                                        <select name="supplier_name" id="client" class="form-control" ">
                                        <?php foreach($h->result() as $row){ ?>
                                            <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">DATE</label>
                                <div class="col-md-5">
                                    <input class="form-control"  placeholder="mm/dd/yyyy" required id="datepicker-autoclose" type="text" name="date">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">INVOICE DATE</label>
                                <div class="col-md-5">
                                    <input type="text" name="invoice_date"  placeholder="mm/dd/yyyy" class="form-control inline-date">
                                </div>
                            </div>



                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label">PRODUCT NAME</label>
                                <div class="col-md-5">
                                    <select name="product_name" id="client" class="form-control" ">
                                    <?php foreach($k->result() as $row){ ?>
                                        <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                                    <?php }?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">QUANTITY</label>
                                <div class="col-md-5">
                                    <input type="number" name="quantity" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">INVOICE_NO</label>
                                <div class="col-md-5">
                                    <input type="text" name="invoice_no" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">RATE</label>
                                <div class="col-md-5">
                                    <input type="number" name="rate" class="form-control" step="any">
                                </div>
                            </div>
                        </div>

                    <br><br>

            <div class="panel-footer text-right">
                <input name="submit" class="btn btn-primary btn-rounded" type="submit" value="Submit">
                <a href="<?php echo base_url();?>welcome/bill" class="btn btn-danger btn-rounded">Cancel</a>
            </div>
        </div> <!-- end card-box -->
        </div>
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
    $(document).ready(function () {
        var max_fields = 100; //maximum input boxes allowed
        var wrapper = $(".input_field_inv_1"); //Fields wrapper
        var add_button = $(".add_field_button_invoice_1"); //Add button ID
        var x = 1; //initlal text box count
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment

                $(wrapper).append('<div class="form-group" style="margin-top:20px;"> <div class="row"><div class="col-md-4"> <input type="text" id="name1" name="name[]" value="" class="form-control amount" /></div><div class="col-md-4"> <input type="text" id="qty1" name="quantity[]" value="" class="form-control amount" /></div><div class="col-md-2"><a href="#" class="remove_field_inv btn btn-danger"><?php echo lang('remove'); ?></a></div></div> </div>'); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field_inv", function (e) { //user click on remove text
            e.preventDefault();
            $(this).closest('.form-group').remove();

        })
    });
   </script>
