<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reeport product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br><br><br><br><br>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Invoice No</th>
            <th>Date</th>
            <th>Client</th>
            <th>GST NO</th>
            <th>Basic Amount </th>
            <th>CGST</th>
            <th>SGST</th>
            <th>IGST</th>
            <th>Tax Total</th>
            <th>NET Amount</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($h->result() as $row){?>
            <tr>
                <td><?php echo $row->invoice_no;?></td>
                <td><?php echo $row->date;?></td>
                <td> <?php echo $row->name;?></td>
                <td><?php echo $row->gst_no;?></td>
                <td><?php echo $row->sub_total;?></td>
                <td><?php echo $row->cgst;?></td>
                <td><?php echo $row->sgst?></td>
                <td><?php echo $row->igst;?></td>
                <td><?php echo $row->total_taxable_amount;?></td>
                <td><?php echo $row->total;?></td>
            </tr>
            <?php $i++; }?>
        </tbody>
    </table>
</div>

</body>
</html>
