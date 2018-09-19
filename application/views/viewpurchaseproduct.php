<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reeport product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>#myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;</style>
</head>
<body>
<br><br><br><br><br><br><br>
<div class="container">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <table class="table table-bordered" id="myTable">
        <thead>
        <tr>
            <th>Purchase Date</th>
            <th>Supplier</th>
            <th>Gst_no</th>
            <th>Unit</th>
            <th>Sub Total</th>
            <th>Total Taxable Amount</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1;$subtotal=0;$totaltaxableamount=0;$total=0; foreach($h->result() as $row){?>
            <tr>
                <td><?php echo $row->created?></td>
                <td> <?php echo $row->name;?></td>
                <td><?php echo $row->gst_no;?></td>
                <td><?php echo $row->weight;?></td>
                <td><?php echo $row->sub_total;?></td>
                <td><?php echo $row->total_taxable_amount;?></td>
                <td><?php echo $row->total;?></td>
            </tr>
            <?php $i++;$total+=$row->total;$subtotal+=$row->sub_total;$totaltaxableamount+=$row->total_taxable_amount; }?>
        <tr>
            <th>Total</th>
            <td> </td>
            <td></td>
            <td></td>
            <td><?php echo $subtotal;?></td>
            <td><?php echo $totaltaxableamount;?></td>
            <td><?php echo $total;?></td>
        </tr>
        </tbody>
    </table>
</div>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>
