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

    <?php
    $krname = $_GET['krname'];
    //  echo $krname;
    include 'connection.php';
    ?>
    <div style="display: flex; justify-content: center;">
        <button onclick="window.print()" class="btn btn-primary" id="print-btn"> Print </button>
    </div>
    <!-- <div id="maindiv"> -->
        <div id="main-content" class="main-content">

            <!-- ==========================  print button  ======================= -->

            <h3 style="text-align: center;"><b> <?php echo $krname; ?> REPORT </b></h3>
            <?php
            
                //   ========================  search record as per date  ================================================
                $disp = "select *,DATE_FORMAT(krgdate, '%d-%m-%Y'),DATE_FORMAT(krdisdate, '%d-%m-%Y') from krissue where krname = '$krname'";

                $result = mysqli_query($conn, $disp) or die("Query Unsucssful.........");
                if (mysqli_num_rows($result) > 0) {
            ?>
                    <table align="center" cellpadding="7px" id="print-table" class="table table-striped">
                        <thead class="thead-dark">
                            <th>Product Name</th>
                            <th>Weight</th>
                            <th>Size</th>
                            <th>Pro detail</th>
                            <th style="width: 3cm;">OrderDate</th>
                            <th style="width: 3cm;">Dispetch Date</th>
                            <th>Received</th>
                            <th>Pending</th>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>                        
                                    <td><?php echo $row['proname']; ?></td>
                                    <td><?php echo $row['proweight']; ?></td>
                                    <td><?php echo $row['prosize']; ?></td>
                                    <td><?php echo $row['prodetail']; ?></td>
                                    <td><?php echo $row["DATE_FORMAT(krgdate, '%d-%m-%Y')"]; ?></td>
                                    <td><?php echo $row["DATE_FORMAT(krdisdate, '%d-%m-%Y')"]; ?></td>
                                    <?php
                                    if($row['status'] == 'recive')
                                    {
                                        echo "<td>Recived<td>";
                                        echo "<td></td>";
                                    }
                                    elseif($row['status'] == 'pending')
                                    {
                                        echo "<td><td>";
                                        echo "<td>Pending</td>";
                                    }
                                    ?>
                                </tr>

                            <?php } // lose of while loop 
                            ?>
                        </tbody>
                    </table>
            <?php } // if curly breces over
                else {
                    echo "<h2> No Record Found</h2>";
                }
            
            mysqli_close($conn);
            ?>

        </div>
    <!-- </d    iv> -->
</body>

</html>