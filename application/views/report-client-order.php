<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="printclientorder" class="form-horizontal" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="color: #fff;"><span class="fa fa-list"></span> Reports -  Client Order</h3>
                        </div>
                        <div class="panel-body form-group-sepaquantityd">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">Client Name</label>
                                    <div class="col-md-5">
                                        <select name="client_name" id="client" class="form-control" >
                                            <?php foreach($h->result() as $row){?>
                                                <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-footer text-right">
                                <input class="btn btn-primary btn-rounded" type="submit" value="View in Table">
                                <a href="printclientorder1" class="btn btn-primary btn-rounded">Download Report</a>
                                <a href="<?php echo base_url();?>welcome/dashboard" class="btn btn-danger btn-rounded">Cancel</a>
                            </div>
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
