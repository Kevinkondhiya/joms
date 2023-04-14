<?php
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
    <link rel="stylesheet" href="printallorder.css" media="print">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    th,
    td {
        font-size: smaller;
    }
</style>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div style="display: flex; justify-content: center;" id="display">
            <label class="indisp">select date From</label>
            <input type="date" name="fromdate" id="fromdatem" class="indisp">
        </div>
        <div style="display: flex; justify-content: center;" id="display">
            <label class="indisp">select date To</label>
            <input type="date" name="todate" id="todate" class="indisp">
        </div>
        <div style="display: flex; justify-content: center;" id="display">
            <input type="submit" name="search" value="search" id="print-btn" class="btn">
        </div>

    </form>
    <?php
    $fromdt = $_POST['fromdate'];
    $todt = $_POST['todate'];
    // echo $fromdt;
    include 'connection.php';
    ?>
    <div style="display: flex; justify-content: center;">
        <button onclick="window.print()" class="btn btn-primary" id="print-btn"> Print </button>
    </div>
    <!-- <div id="maindiv"> -->
        <div id="main-content" class="main-content">

            <!-- ==========================  print button  ======================= -->

            <h2 style="text-align: center;"><b> Order Report </b></h2>
            <?php
            if ($_POST['search']) {
                //   ========================  search record as per date  ================================================
                $search2 = "select *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') from orderpro where orderdt between STR_TO_DATE('$fromdt','%Y-%m-%d') and STR_TO_DATE('$todt','%Y-%m-%d')";

                $result = mysqli_query($conn, $search2) or die("Query Unsucssful.........");
                if (mysqli_num_rows($result) > 0) {
            ?>
                    <table align="center" cellpadding="7px" id="print-table" class="table table-striped">
                        <thead class="thead-dark">
                            <th>Vr no</th>
                            <th>Party Name</th>
                            <th>Pro Name</th>
                            <th>Weight</th>
                            <th>Size</th>
                            <th>Pro detail</th>
                            <th>order no</th>
                            <th>Status</th>
                            <th style="width: 3cm;">OrderDate</th>
                            <th style="width: 3cm;">Dispetch Date</th>

                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['vrno']; ?></td>
                                    <td><?php echo $row['partyname']; ?></td>
                                    <td><?php echo $row['proname']; ?></td>
                                    <td><?php echo $row['pweight']; ?></td>
                                    <td><?php echo $row['psize']; ?></td>
                                    <td><?php echo $row['prodetail']; ?></td>
                                    <td><?php echo $row['orderno']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"]; ?></td>
                                    <td><?php echo $row["DATE_FORMAT(disdate, '%d-%m-%Y')"]; ?></td>
                                </tr>

                            <?php } // lose of while loop 
                            ?>
                        </tbody>
                    </table>
            <?php } // if curly breces over
                else {
                    echo "<h2> No Record Found</h2>";
                }
            }
            mysqli_close($conn);
            ?>

        </div>
    <!-- </d    iv> -->
</body>

</html>