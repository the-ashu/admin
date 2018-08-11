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
                <form   action="<?php echo base_url();?>welcome/update_product" class="form-horizontal" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="color: #fff;"><span class="fa fa-file-o"></span> Create new Product</h3>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">Unit</label>
                                    <div class="col-md-5">
                                        <select name="unit" id="unit" class="form-control" value="<?php echo $h['weight'];?>" >
                                            <option value="TON">TON</option>
                                            <option value="CFT">CFT</option>
                                            <option value="MQ">MQ</option>
                                            <option value="BAG">BAG</option>
                                            <option value="PCS">PCS</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">GST TYPE</label>
                                    <div class="col-md-5">
                                        <select name="gst" id="unit" class="form-control" value="<?php echo $h['gst_type'];?>" >
                                            <option value="CGST">CGST</option>
                                            <option value="SGST">SGST</option>
                                            <option value="IGST">IGST</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">STATUS</label>
                                    <div class="col-md-5">
                                        <select name="status" id="unit" class="form-control" value="<?php echo $h['status'];?>">
                                            <option value="0">ENABLE</option>
                                            <option value="1">DISABLE</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">RATE</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="rate" placeholder="Add Title" value="<?php echo $h['rate']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">NAME</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $h['name'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">HSN CODE</label>
                                    <div class="col-md-5">
                                        <input name="hsn" id="email" class="form-control" type="hidden" value="<?php echo $h['product_id'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">CGST</label>
                                    <div class="col-md-5">
                                        <input name="cgst" id="email" class="form-control" type="text" value="<?php echo $h['cgst'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">SGST</label>
                                    <div class="col-md-5">
                                        <input name="sgst" id="email" class="form-control" type="text" value="<?php echo $h['sgst'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">IGST</label>
                                    <div class="col-md-5">
                                        <input name="igst" id="email" class="form-control" type="text" value="<?php echo $h['igst'];?>">
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer text-right">
                                <input name="submit" class="btn btn-primary btn-rounded" type="submit" value="Update">
                            </div>
                        </div>
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



