<br><br><br><br>
<form id="addform" name="addform" action="<?php echo base_url();?>welcome/addbillproduct1" class="form-horizontal" method="post">
    <br><br><br><br>
    <div class="col-xs-12">
        <div class="col-md-12" >
            <div id="field">
                <div id="field0">
                    <!-- Text input-->
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">PRODUCT NAME</label>
                        <div class="col-md-5">
                            <select name="name" id="client" class="form-control" ">
                            <?php foreach($k->result() as $row){ ?>
                                <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                            <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label  class="col-md-4 control-label">QUANTITY</label>
                            <div class="col-md-5">
                                <input type="number" name="quantity" class="form-control" value="<?php echo $quantity;?>">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="bill_id" class="form-control" value="<?php echo $bill_id;?>">
                    <input type="hidden" name="bill_detail_id" class="form-control" value="<?php echo $bill_detail_id;?>">
                    <div class="form-group col-md-12">
                        <label  class="col-md-4 control-label">RATE</label>
                        <div class="col-md-5">
                            <input type="number" name="rate" class="form-control total decimal" step="any" value="<?php echo $rate;?>">
                        </div>
                    </div>
                    <input type="hidden" name="invoice_no" class="form-control total decimal" step="any" value="<?php echo $invoice_no;?>">
                    <!-- Text input-->
                    <br><br>
                    <!-- File Button -->

                </div>
            </div>
            <!-- Button -->
            <br><br>

        </div>
    </div>
    <div class="panel-footer text-right">
        <input name="submit" class="btn btn-primary btn-rounded" type="submit" value="Submit">
        <a href="<?php echo base_url();?>welcome/bill" class="btn btn-danger btn-rounded">Cancel</a>
    </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        //@naresh action dynamic childs
        var next = 0;
        $("#add-more").click(function(e){
            e.preventDefault();
            var addto = "#field" + next;
            var addRemove = "#field" + (next);
            next = next + 1;
            var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group"><div class="col-md-12"><label class="col-md-4 control-label">PRODUCT NAME</label>  <div class="col-md-5"><select name="name[]" id="client" class="form-control" "> <?php foreach($k->result() as $row){ ?>  <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>   <?php }?></select></div></div> <br><br><label class="col-md-4 control-label" for="action_id">Quantity</label> <div class="col-md-5"> <input id="quantity" name="quantity[]" type="text" placeholder="" class="form-control input-md"> </div></div><!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_name">Rate</label> <div class="col-md-5"> <input id="action_name" name="rate[]" type="number" placeholder="" class="form-control input-md" step="any"> </div></div></div>';
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
