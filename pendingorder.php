<?php
include 'connection.php';
include 'header.php';
include 'session.php';
?>
<!-- =============  button stylesheet  ==================== -->
<link href="p-btn.css" rel="stylesheet">
<style>
    .search {
        height: 30px;

    }

    .searchdiv {
        display: flex;
        justify-content: right;
    }
</style>
<!-- =========================================    search bar   ============================] -->
<div id="main-content">
    <form action="" method="POST">
    <div class="searchdiv">
        <input type="search" class="search" name="search" placeholder="Order No." required>
        <button type="submit" name="btn-search" class="bt bt-primary">
        search    
        <i class="fas fa-search"></i>
        </button>
        </div>
    </form>
<?php
    if(isset($_POST['btn-search']))
    {
        ?>
            <table cellpadding="7px" style="margin-top: 10px;">
                <tr>
                    <th>Vr no.</th>
                    <th>Party Name</th>
                    <th>Pro Name</th>
                    <th>Weight</th>
                    <th>Size</th>
                    <th>Pro Detail</th>
                    <th>Order No.</th>
                    <th>Order date</th>
                    <th>Dispetch Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
        <?php
        $selorno = $_POST['search'];
        $selvrno = mysqli_query($conn,"SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where orderno = $selorno and status != 'complete'") or die("could not search record");
        if(mysqli_num_rows($selvrno) > 0)
        {
            while($row2 = mysqli_fetch_assoc($selvrno))
            {
                ?>
                <tr>
                    <td><?php echo $row2['vrno']; ?></td>
                    <td style="color:green; font-weight:bold;"><?php echo $row2['partyname']; ?></td>
                    <td><?php echo $row2['proname']; ?></td>
                    <td><?php echo $row2['pweight']; ?></td>
                    <td><?php echo $row2['psize']; ?></td>
                    <td><?php echo $row2['prodetail']; ?></td>
                    <td><?php echo $row2['orderno']; ?></td>
                    <td><?php echo $row2["DATE_FORMAT(orderdt, '%d-%m-%Y')"]; ?></td>
                    <td><?php echo $row2["DATE_FORMAT(disdate, '%d-%m-%Y')"]; ?></td>
                    <td style="color:red;font-weight:bold;"><?php echo ucfirst($row2["status"]); ?></td>
                    
                    <?php
                    
                    if($row2 != 'complete')
                    
                    {
                    
                    ?>
                        <td>
                            <a href="editorder.php?vrno=<?php echo $row['vrno']; ?>">C</a>
                            <a href="delete.php?vrno=<?php echo $row['vrno']; ?>">D</a>
                        </td>
                    <?php
                    }
                    ?>
                </tr>
                <?php
            }  // ========= Search While  ================================

        }  // ========= Search if  ================================

        else
        {
            echo "<tr><td colspan='11'><h3 id='title' style='color: red; font-weight:bold;'> No Record Found</h3></td></tr>";
        }
        echo "</table>";
    }
?>

    <h2 id="title"> Pending Order </h2>
    <?php

    ?>
    <div>
    </div>
    <table cellpadding="7px">
        <tr>
            <th>Vr no.</th>
            <th>Party Name</th>
            <th>Pro Name</th>
            <th>Weight</th>
            <th>Size</th>
            <th>Pro Detail</th>
            <th>Order No.</th>
            <th>Order date</th>
            <th>Dispetch Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
<?php
        $select = "SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where status != 'complete'";
        $result = mysqli_query($conn, $select) or die("Query Unsucssful.........");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
?>
                <tr>
                    <td><?php echo $row['vrno']; ?></td>
                    <td style="color:green; font-weight:bold;"><?php echo $row['partyname']; ?></td>
                    <td><?php echo $row['proname']; ?></td>
                    <td><?php echo $row['pweight']; ?></td>
                    <td><?php echo $row['psize']; ?></td>
                    <td><?php echo $row['prodetail']; ?></td>
                    <td><?php echo $row['orderno']; ?></td>
                    <td><?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"]; ?></td>
                    <td><?php echo $row["DATE_FORMAT(disdate, '%d-%m-%Y')"]; ?></td>
                    <td style="color:red;font-weight:bold;"><?php echo ucfirst($row["status"]); ?></td>

                    <td>
                        <a href="editorder.php?vrno=<?php echo $row['vrno']; ?>">C</a>
                        <a href="delete.php?vrno=<?php echo $row['vrno']; ?>">D</a>
                    </td>
                </tr>
        <?php } // lose of while loop
        } // if curly breces over 
        else {
            echo "<tr><td colspan='11'><h3 id='title' style='color: red; font-weight:bold;'> No Record Found</h3></td></tr>";
        }
        ?>
    </table>
    
    <div style="display: flex; justify-content: center;">
                <a href="pendingorder_print.php" class="btn btn-primary"> Print </a>
    </div>
