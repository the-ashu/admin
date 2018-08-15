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
            <th>Date</th>
            <th>Product Name</th>
            <th>Unit</th>
            <th>Order Quantity</th>
            <th>Bill Quantity</th>
            <th>Remaining</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($h->result() as $row){?>
            <tr>
                <td><?php echo $row->created;?></td>
                <td> <?php echo $row->name;?></td>
                <td><?php echo $row->weight;?></td>
                <td><?php echo $row->quantity;?></td>
                <td><?php echo $row->product_id;?></td>
                <td><?php echo $row->client_id;?></td>
            </tr>
            <?php $i++; }?>
        </tbody>
    </table>
</div>

</body>
</html>
