<?php
include 'connection.php';
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KNK</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/style.css" > -->
  <link rel="stylesheet" href="printorder.css" media="print">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<form action="" method="POST">
<?php
$secvr = "select vrno from orderpro ORDER BY id ASC ";
$ressecvr = mysqli_query($conn, $secvr) or die("fail to search record");
?>

<div class="form-group">
    <div class="det">
        <label id="lab">Order Vr No.</label>
        <select name="inputvr" id="inputvr" class="select">
            <option class="select">select</option>
            <?php
            // foreach($options as $option)
            // {
            if ($ressecvr->num_rows > 0) {
                while ($row = $ressecvr->fetch_assoc()) {
                    //echo $row['vrno'];
            ?>
            <option><?php echo $row['vrno']; ?></option>
                            <!-- ========================end of drop down================================= -->
                    <?php
                        }
                    }   //if br
                    ?>
            </select>
            </div>
            <button class="save-button submit" name="save-button" id="btn-primary">Add</button> <br>
            
</form>
<?php
    if (isset($_POST['save-button'])) {
        $orvrno = $_POST['inputvr'];

        $orinsert = "insert into krorgiv(orvrno) values($orvrno)";
        $insresult = mysqli_query($conn, $orinsert) or die("unsuccessfull");
        if ($insresult) {
            //echo "success";
        }
    }
    // ===========================   FORM 2 DETAILS ================================
    $fetvr = "select * from krorgiv ORDER BY kid DESC LIMIT 1";
    //select *from getLastRecord select *from getLastRecord ORDER BY id DESC LIMIT 1
    $resfetvr = mysqli_query($conn, $fetvr) or die("unsuccess to fetch record");
    if (mysqli_num_rows($resfetvr) > 0) {
        while ($row2 = mysqli_fetch_assoc($resfetvr)) {
            $orderno = $row2['orvrno'];
        }
    }

    $fetdet = "select *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') from orderpro where vrno = $orderno";
    $resfetdet = mysqli_query($conn,$fetdet) or die("unsuccess to fetch details");
    if (mysqli_num_rows($resfetdet) > 0) {
        while ($row3=mysqli_fetch_assoc($resfetdet)) {
            $fvrno =$row3['vrno'] ;
            $fpartyname =$row3['partyname'];
            $fproname=$row3['proname'];
            $fweight=$row3['pweight'];
            $fsize=$row3['psize'];
            $fprodetail=$row3['prodetail'];
            $forno=$row3['orderno'];
            $forderdt=$row3["DATE_FORMAT(orderdt, '%d-%m-%Y')"];
            $fdisdate=$row3["DATE_FORMAT(disdate, '%d-%m-%Y')"];
        }
    }
?>
<p style="text-align: center;font-size: large; font-weight: bold;">Order Recipt</p>
<div id="maindiv">
<div id="divborder">
<table id="print-table" class="table table-striped">
        <tbody>
            <tr>
                <th colspan="7" style="text-align: center;font-size: large;"> MADHUVAN GOLD ART </th>
            </tr>

            <tr>
                <th> Order Vr no. </th>
                <td colspan="6"><?php echo $fvrno; ?></td>
            </tr>

            <tr>
                <th> Order Date </th>
                <td colspan="6"><?php echo $forderdt ; ?></td>
            </tr>
            
            <tr>
                <th style="width: 3cm;"> Party Name </th>
                <th style="width: 3cm;"> Product Name </th>
                <th style="width: 3cm;"> Weight </th>
                <th style="width: 3cm;"> Size </th>
                <th width="5px"> Pro Detail. </th>
                <th> Order No. </th>
                <th> Dispetch Date </th>
            </tr>
            
            <tr>    
                <td><?php echo $fpartyname; ?></td>
                <td><?php echo $fproname ; ?></td>
                <td><?php echo $fweight ; ?></td>
                <td><?php echo $fsize ; ?></td>
                <td width="5px"><?php echo $fprodetail ; ?></td>
                <td><?php echo $forno ; ?></td>
                <td><?php echo $fdisdate ; ?></td>
            </tr>
        </tbody>
    </table>

    <button onclick="window.print()" class="btn btn-primary" id="print-btn" style="align-items: center;"> Print </button>
</div>
</div>
</body>
</html>