<div class="wrapper">
    <div class="container">


        <div class="row">

            <div class="col-md-3 col-sm-4 col-xs-5">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3><span class="fa fa-user"></span> Patel And Sons Krishi Sewa Kendra</h3>
                        <p></p>
                        <div class="text-center" id="user_image">
                            <img src="<?php echo base_url();?>assets/images/users/5b5c40ddf26e5.png" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="panel-body form-group-separated">

                        <div class="form-group">
                            <div class="col-md-12 col-xs-12">
                                <a href="#" class="btn btn-primary btn-block btn-rounded hidden" data-toggle="modal" data-target="#modal_change_photo">Change Photo</a>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <form id="upform" action="update_profile"  enctype="multipart/form-data" method="post" class="form-horizontal">
                <input type="hidden" name="logourl" value="5b5c40ddf26e5.png" />
                <div class="col-md-9 col-sm-8 col-xs-7">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-pencil"></span> Profile</h3>

                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">Company Name</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="text" name="company_name" required value="<?php echo $h['company_name'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">Phone No</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="text" name="phone_no" required value="<?php echo $h['phone_no'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">Email</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="text" name="email" value="<?php echo $h['email'];?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">Corresponding Address</label>
                                <div class="col-md-9 col-xs-7">
                                    <textarea name="street_address" class="form-control" rows="8"><?php echo $h['street_address'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">Reg Office</label>
                                <div class="col-md-9 col-xs-7">
                                    <textarea name="reg_office" class="form-control" rows="8"><?php echo $h['reg_office'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group hidden">
                                <label class="col-md-3 col-xs-5 control-label">State</label>
                                <div class="col-md-9 col-xs-7">
                                    <select class="form-control" name="state" >
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group hidden">
                                <label class="col-md-3 col-xs-5 control-label">City</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="text" name="city"  value="<?php echo $h['city'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group hidden">
                                <label class="col-md-3 col-xs-5 control-label">Pincode</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="text" name="pincode"  value="<?php echo $h['pincode'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">Gst No</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="text" name="gst_no" required value="<?php echo $h['gst_no'];?>" class="form-control">
                                </div>
                            </div>


                            <div class="form-group hidden">
                                <label class="col-md-3 col-xs-5 control-label">&nbsp;</label>
                                <div class="col-md-9 col-xs-7 text-center">
                                    <strong>Change Password</strong>
                                </div>
                            </div>
                            <div class="form-group hidden">
                                <label class="col-md-3 col-xs-5 control-label">Old Password</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="password" name="oldpass" placeholder="Leave empty if you do not wish to update password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group hidden">
                                <label class="col-md-3 col-xs-5 control-label">Password</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="password" name="newpass" class="form-control">
                                </div>
                            </div>
                            <div class="form-group hidden">
                                <label class="col-md-3 col-xs-5 control-label">Re-enter Password</label>
                                <div class="col-md-9 col-xs-7">
                                    <input type="password" name="newpass2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-xs-5">
                                    <button type="submit" class="btn btn-primary btn-rounded pull-right">Save</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </form>

        </div>
        <!-- end row -->
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



