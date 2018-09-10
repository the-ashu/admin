<html>
<head>
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<!-- End Navigation Bar-->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="addform" name="addform" action="newprebill" class="form-horizontal" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="color: #fff;"><span class="fa fa-file-o"></span> Create new Bill</h3>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">CLIENT NAME</label>
                                    <div class="col-md-5">
                                        <select name="client_name" id="client" class="form-control" ">
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
                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">Tpt. Co.</label>
                                <div class="col-md-5">
                                    <input type="text" name="tpt_co" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">Gr. No.</label>
                                <div class="col-md-5">
                                    <input type="text" name="gr_no" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">Way Bill Ref.</label>
                                <div class="col-md-5">
                                    <input type="text" name="way_bill_ref" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">Place of Order.</label>
                                <div class="col-md-5">
                                    <input type="text" name="place_of_order" class="form-control">
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
                                <label  class="col-md-4 control-label">INVOICE NO</label>
                                <div class="col-md-5">
                                    <input type="text" name="invoice_no" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--end data-role="dynamic-fields-->
                            <div class="form-group col-md-12">
                                <label  class="col-md-4 control-label">RATE</label>
                                <div class="col-md-5">
                                    <input type="number" name="rate" class="form-control total decimal" step="any">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>
            </div>
            <div class="col-xs-12">
                <div class="col-md-12" >
                    <h3> Actions</h3>
                    <div id="field">
                        <div id="field0">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="action_id">Action Id</label>
                                <div class="col-md-5">
                                    <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br><br>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="action_name">Action Name</label>
                                <div class="col-md-5">
                                    <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br><br>
                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="action_json">Action JSON File</label>
                                <div class="col-md-4">
                                    <input type="file" id="action_json" name="action_json" class="input-file" accept=".txt,.json">
                                    <div id="action_jsondisplay"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <div class="col-md-4">
                            <button type="button" id="add-more" name="add-more" class="btn btn-primary">Add More</button>
                        </div>
                    </div>
                    <br><br>

                </div>
            </div>
        </div>

        <div class="panel-footer text-right">
                <input name="submit" class="btn btn-primary btn-rounded" type="submit" value="Submit">
                <a href="<?php echo base_url();?>welcome/bill" class="btn btn-danger btn-rounded">Cancel</a>
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





<script>

    //product func

    $(document).ready(function () {
        //@naresh action dynamic childs
        var next = 0;
        $("#add-more").click(function(e){
            e.preventDefault();
            var addto = "#field" + next;
            var addRemove = "#field" + (next);
            next = next + 1;
            var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_id">Action Id</label> <div class="col-md-5"> <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md"> </div></div><br><br> <!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_name">Action Name</label> <div class="col-md-5"> <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- File Button --> <div class="form-group"> <label class="col-md-4 control-label" for="action_json">Action JSON File</label> <div class="col-md-4"> <input id="action_json" name="action_json" class="input-file" type="file"> </div></div></div>';
            var newInput = $(newIn);
            var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
            var removeButton = $(removeBtn);
            $(addto).after(newInput);
            $(addRemove).after(removeButton);
            $("#field" + next).attr('data-source',$(addto).attr('data-source'));
            $("#count").val(next);

            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
        });

    });
</script>
</html>