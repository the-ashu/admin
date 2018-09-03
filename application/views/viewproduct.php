<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reeport product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-3.1.0.slim.min.js"></script>
    <script src="sumTable.js"></script>
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
            <th>S.no</th>
            <th>HSN Code</th>
            <th>Product name</th>
            <th>Unit</th>
            <th>Rate</th>
            <th>GST Type</th>
            <th>CGST</th>
            <th>SGST</th>
            <th>IGST</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($h->result() as $row){?>
        <tr>
            <td><?php echo $i;?></td>
            <td> <?php echo $row->product_code;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->weight;?></td>
            <td><?php echo $row->rate;?></td>
            <td><?php echo $row->gst_type;?></td>
            <td><?php echo $row->cgst;?></td>
            <td><?php echo $row->sgst;?></td>
            <td><?php echo $row->igst;?></td>
        </tr>
            <?php $i++; }?>
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
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    $("myTable").sumTable();
    $("table").sumTable({

            "totalText" : 'Total'

    });

</script>
</body>
</html>
