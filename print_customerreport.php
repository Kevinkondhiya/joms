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
    th,thead,
    td {
        font-size: smaller;
        border-bottom: 1px solid black;
        /* border-top: 1px solid black; */

    }
</style>

<body>
    
    <?php
    include 'connection.php';
    $customername = $_GET['cusname'];
    // echo $customername;
    ?>
    <div style="display: flex; justify-content: center;">
        <button onclick="window.print()" class="btn btn-primary" id="print-btn"> Print </button>
    </div>
    <!-- <div id="maindiv"> -->
        <div id="main-content" class="main-content">

            <!-- ==========================  print button  ======================= -->

            <h2 style="text-align: center;"><b><?php echo $customername; ?> Pending Order Report </b></h2>
            <?php
                $search2 = "SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where status != 'complete' and partyname = '$customername'";


                $result = mysqli_query($conn, $search2) or die("Query Unsucssful.........");
                if (mysqli_num_rows($result) > 0) {
            ?>
                    <table align="center" cellpadding="7px" id="print-table" class="table table-striped">
                        <thead class="thead-dark">
                    <th>OrVr no.</th>
                    <th>Party Name</th>
                    <th>Pro Name</th>
                    <th>Weight</th>
                    <th>Size</th>
                    <th>Pro detail</th>
                    <th>OrderNo</th>
                    <th>Status</th>
                            <th style="width: 3cm;">OrderDate</th>
                            <th style="width: 3cm;">Dilivery Date</th>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                <td><?php echo $row['vrno'] ?></td>
                                    <td><?php echo $row['partyname'] ?></td>
                                    <td><?php echo $row['proname'] ?></td>
                                    <td><?php echo $row['pweight'] ?></td>
                                    <td><?php echo $row['psize'] ?></td>
                                    <td><?php echo $row['prodetail'] ?></td>
                                    <td><?php echo $row['orderno'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td><?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"] ?></td>
                                    <td><?php echo $row["DATE_FORMAT(disdate, '%d-%m-%Y')"] ?></td>
                                </tr>

                            <?php } // lose of while loop 
                            ?>
                            <tr> <td colspan="10" ></td> </tr>
                            <tr>
                                <td colspan="4" >
                                    <b>Total Orders</b>
                                </td>
                                <td>
                                    <?php
                                    $search3 = mysqli_query($conn,"SELECT count(*) as total FROM orderpro where status != 'complete' and partyname = '$customername'");
                                    if($search3)
                                    {
                                        $row2 = mysqli_fetch_assoc($search3);
                                        
                                            echo $row2["total"];
                                        
                                    }
                                    ?>
                                </td>

                                <td colspan="2" >
                                    <b>Total Weight</b>
                                </td>
                                <td>
                                    <?php
                                    $search_weight = mysqli_query($conn,"SELECT sum(pweight) as sum_w FROM orderpro where status != 'complete' and partyname = '$customername'");
                                    if($search_weight)
                                    {
                                        $row_weight = mysqli_fetch_assoc($search_weight);
                                        
                                            echo $row_weight["sum_w"];
                                        
                                    }
                                    ?>
                                </td>

                            </tr>



                        </tbody>
                    </table>
            <?php } // if curly breces over
                else {
                    echo "<h2> No Record Found</h2>";
                }
            mysqli_close($conn);
            ?>

        </div>
    <!-- </div> -->
</body>
</html>