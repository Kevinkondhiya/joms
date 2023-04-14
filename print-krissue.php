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
  <link rel="stylesheet" href="print.css" media="print">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<form action="" method="POST" id="p-form">
<?php
$secvr = "select krvrno from krissue ORDER BY krvrno ASC";
$ressecvr = mysqli_query($conn, $secvr) or die("fail to search record");
?>

<div class="form-group" id="p-form">
    <label id="lab">karigar Vr No.</label>
    <select name="inputvr" id="inputvr" class="select">
        <option>select</option>
        <?php
        // foreach($options as $option)
        // {
        if ($ressecvr->num_rows > 0) {
            while ($row = $ressecvr->fetch_assoc()) {
                //echo $row['vrno'];
        ?>
        <option><?php echo $row['krvrno']; ?></option>
                        <!-- ========================end of drop down================================= -->
                <?php
                    }
                }   //if br
                ?>
            </select>
            <button class="save-button submit" name="save-button" name="save-button" id="btn-primary">Add</button> <br>
            
</form>
<?php
    if (isset($_POST['save-button'])) {
        $krvrno = $_POST['inputvr'];
        //echo $krvrno;
        $orinsert = "insert into krorgiv(krvrno) values($krvrno)";
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
            $krno = $row2['krvrno'];
        }
    }

    $fetdet = "select * from krissue where krvrno = $krno";
    $resfetdet = mysqli_query($conn,$fetdet) or die("unsuccess to fetch details");
    if (mysqli_num_rows($resfetdet) > 0) {
        while ($row3=mysqli_fetch_assoc($resfetdet)) {
            $fvrno =$row3['krvrno'] ;
            $forno=$row3['orderno'];
            $fkrname=$row3['krname'];
            $fproname=$row3['proname'];
            $fweight=$row3['proweight'];
            $fsize=$row3['prosize'];
            $fprodetail=$row3['prodetail'];
            $fkrgivdt=$row3['krgdate'];
            // $fprodisdate=$row3['prodate'];
        }
    }
?>
<div id="divborder">
<div id="maindiv">
<table id="print-table" class="table table-striped" style="width: 18.9cm;">
        <tbody>
            <tr>
                <th> Vr no. </th>
                <th> Kr Name </th>
                <th> Product Name </th>
                <th> Weight </th>
                <th> Size </th>
                <th> Pro Detail. </th>
                <th> Kr Given Date </th>
                <!-- <th> Order Date </th> -->
                <!-- <th> Dispatch Date </th> -->
            </tr>

            <tr>    
                <td><?php echo $fvrno; ?></td>
                <td><?php echo $fkrname; ?></td>
                <td><?php echo $fproname ; ?></td>
                <td><?php echo $fweight ; ?></td>
                <td><?php echo $fsize ; ?></td>
                <td><?php echo $fprodetail ; ?></td>
                <td><?php echo $fkrgivdt ; ?></td>
                <!-- <td><?php // echo $fdisdate ; ?></td> -->
            </tr>
        </tbody>
    </table>

    <button onclick="window.print()" class="btn btn-primary" id="print-btn" style="align-items: center;"> Print </button>
</div>
</div>
</body>
</html>