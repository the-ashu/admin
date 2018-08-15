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
            <th>supplier</th>
            <th>Email</th>
            <th>Contact</th>
            <th>GST NO</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($h->result() as $row){?>
            <tr>
                <td><?php echo $row->name;?></td>
                <td> <?php echo $row->email;?></td>
                <td><?php echo $row->contact;?></td>
                <td><?php echo $row->gst_no;?></td>
                <td><?php echo $row->total;?></td>
            </tr>
            <?php $i++; }?>
        </tbody>
    </table>
</div>

</body>
</html>
