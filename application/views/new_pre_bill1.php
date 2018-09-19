<br><br><br><br>
<form id="addform" name="addform" action="newprebill" class="form-horizontal" method="post">
    <br><br><br><br>
<div class="col-xs-12">
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
        <div class="form-group col-md-12">
            <label  class="col-md-4 control-label">INVOICE NO</label>
            <div class="col-md-5">
                <input type="text" name="invoice_no" class="form-control">
            </div>
        </div>
        <div id="field">
            <div id="field0">
                <!-- Text input-->
                <div class="form-group col-md-12">
                    <label class="col-md-4 control-label">PRODUCT NAME</label>
                    <div class="col-md-5">
                        <select name="name[]" id="client" class="form-control" ">
                        <?php foreach($k->result() as $row){ ?>
                            <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                        <?php }?>
                        </select>
                    </div>
                </div>
                    <div class="form-group col-md-12">
                        <label  class="col-md-4 control-label">QUANTITY</label>
                        <div class="col-md-5">
                            <input type="number" name="quantity[]" class="form-control">
                        </div>
                    </div>
                <div class="form-group col-md-12">
                    <label  class="col-md-4 control-label">RATE</label>
                    <div class="col-md-5">
                        <input type="number" name="rate[]" class="form-control total decimal" step="any">
                    </div>
                </div>
                <!-- Text input-->
                <br><br>
                <!-- File Button -->

            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <div class="col-md-4">
                <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
            </div>
        </div>
        <br><br>

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
