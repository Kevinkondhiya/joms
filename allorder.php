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
<!-- =========================================    search bar   ============================  -->
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
        $selvrno = mysqli_query($conn,"SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where orderno = $selorno") or die("could not search record");
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
                    
                    
                    <?php
                    
                    if($row2["status"] != "complete")
                    {
                    ?>
                        <td style="color:red;font-weight:bold;"><?php echo ucfirst($row2["status"]); ?></td>
                        <td>
                            <a href="editorder.php?vrno=<?php echo $row2['vrno']; ?>">C</a>
                            <a href="delete.php?vrno=<?php echo $row2['vrno']; ?>">D</a>
                        </td>
                    <?php
                    }
                    else
                    {
                    ?>
                    <td style="color:green;font-weight:bold;"><?php echo ucfirst($row2["status"]); ?></td>
                        <td style="background-color:white;"></td>
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

    <h2 id="title">Completed Order </h2>


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
            <th>Dis Date</th>
            <th>Status</th>
        </tr>


        <?php
        $select = "SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where status = 'complete'";
        $result = mysqli_query($conn, $select) or die("Query Unsucssful.........");

        if (mysqli_num_rows($result) > 0) {
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
                    <td><?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"]; ?></td>
                    <td><?php echo $row["DATE_FORMAT(disdate, '%d-%m-%Y')"]; ?></td>
                    <td style="color:green;font-family: Work Sans,sans-serif; font-weight:bold;"><b>Completed</b></td>
                </tr>
        <?php           } // close of while loop
        } // if curly breces over 
        else {
            echo "<tr><td colspan='10'><h3 id='title' style='color: red;'> No Record Found</h3></td></tr>";
        }
        
        ?>

<?php
/*
$wh_scrc = mysqli_query($conn,"select * from orderpro where status = 'pending'") or die("unsuccessful to search");
if(mysqli_num_rows($wh_scrc) > 0)
{
    $j=0;
        while($row4 = mysqli_fetch_assoc($wh_scrc))
        {
            $cars = array (
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
              );

            $details[] = "<br> Please give order"."<br>" . " VR NO. : ".$row4['vrno']  ."<br>"
                                            . " Party name : " .$row4['partyname']  ."<br>"
                                            . " Product name : ". $row4['proname']  ."<br>"
                                            . " product weight : " .$row4['pweight']  ."<br>"
                                            . " product Size : " . $row4['psize']  ."<br>"
                                            . " product Detail : " .$row4['prodetail']  ."<br>"
                                            . " Order Dispetch Date : ".$row4['disdate'];
                                            $j++;
        }
    // for($i=0;$i<$j;$i++)
    // {
    //     echo $details[$i]."<br>";
    // }
}*/
?>

    </table>
</div>
    <div style="display: flex; justify-content: center;">
                <a href="user_print.php" class="btn btn-primary"> Print </a>
    </div>
    
    <span 
class="float"
style="
  position: fixed;
  width: 50px;
  height: 50px;
  bottom: 30px;
  right: 30px;
  color: #fff;
  border-radius: 50px;
  text-align: center;
  cursor: pointer;
  box-shadow: 2px 2px 3px #999;
"
onclick="gotowhatsapp()">
<img
  src="https://trickuweb.com/whatsapp.png"
  alt=""
  height="50px"
  width="50px"
/>
</span>

    
                <!-- <input type="hidden" id="vrno" value="<?php //echo $row4['vrno']; ?>">
                <input type="hidden" id="ptnm" value="<?php //echo $row4['partyname']; ?>">
                <input type="hidden" id="pronm" value="<?php //echo $row4['proname']; ?>">
                <input type="hidden" id="proweight" value="<?php //echo $row4['pweight']; ?>">
                <input type="hidden" id="prosize" value="<?php //echo $row4['psize']; ?>">
                <input type="hidden" id="prodetail" value="<?php //echo $row4['prodetail']; ?>">
                <input type="hidden" id="ordisdt" value="<?php //echo $row4['disdate']; ?>"> -->

                <!-- <input type="hidden" id="ai" value="<?php echo $j; ?>">
                <input type="hidden" id="vrno" value="<?php echo $detail[$j]['vrno']; ?>">
                <input type="hidden" id="ptnm" value="<?php echo $detail[$j]['ptnm']; ?>">
                <input type="hidden" id="pronm" value="<?php echo $detail[$j]['pronm']; ?>">
                <input type="hidden" id="proweight" value="<?php echo $detail[$j]['pweight']; ?>">
                <input type="hidden" id="prosize" value="<?php echo $detail[$j]['psize']; ?>">
                <input type="hidden" id="prodetail" value="<?php echo $detail[$j]['prodetail']; ?>">
                <input type="hidden" id="ordisdt" value="<?php echo $detail[$j]['disdt']; ?>"> -->

        <?php
        // echo $j."php  jj";
            ?>

            <script>
               
                    <?php
        // ==========================================  whatsapp notifaction  ============================================
        
        ?>
                // var vrno<?php echo $j; ?> =<?php echo json_encode($detail[$j]['vrno']); ?>;
                // var ptnm<?php echo $j; ?> =<?php echo json_encode($detail[$j]['ptnm']); ?>;
                // var pronm<?php echo $j; ?> =<?php echo json_encode($detail[$j]['pronm']); ?>;
                // var pweight<?php echo $j; ?> =<?php echo json_encode($detail[$j]['pweight']); ?>;
                // var psize<?php echo $j; ?> =<?php echo json_encode($detail[$j]['psize']); ?>;
                // var prodetail<?php echo $j; ?> =<?php echo json_encode($detail[$j]['prodetail']); ?>;
                // var disdt<?php echo $j; ?> =<?php echo json_encode($detail[$j]['disdt']); ?>;
                
                // var details<?php echo $j; ?>=   "%0a"+" Please give order" + "%0a"
                //                                 + " VR NO. : "+ vrno<?php echo $j; ?> + "%0a"
                //                                 + " Party name : " + ptnm<?php echo $j; ?> + "%0a"
                //                                 + " Product name : " + pronm<?php echo $j; ?> + "%0a"
                //                                 + " product weight : " + pweight<?php echo $j; ?> + "%0a"
                //                                 + " product Size : " + psize<?php echo $j; ?> + "%0a"
                //                                 + " product Detail : " + prodetail<?php echo $j; ?> + "%0a"
                //                                 + " Order Dispetch Date : " + disdt<?php echo $j; ?> +"%0a";
                <?php
$wh_scrc = mysqli_query($conn,"select * from orderpro where status = 'pending'") or die("unsuccessful to search");
if(mysqli_num_rows($wh_scrc) > 0)
{
    $j=0;
        while($row4 = mysqli_fetch_assoc($wh_scrc))
        {
            $details[] = "%0a %0a Please give order"."%0a" . " VR NO. : ".$row4['vrno']  ."%0a"
                                            . " Party name : " .$row4['partyname']  ."%0a"
                                            . " Product name : ". $row4['proname']  ."%0a"
                                            . " product weight : " .$row4['pweight']  ."%0a"
                                            . " product Size : " . $row4['psize']  ."%0a"
                                            . " product Detail : " .$row4['prodetail']  ."%0a"
                                            . " Order Dispetch Date : ".$row4['disdate'];
                                            $j++;
        }
}
?>
                        function gotowhatsapp()
                        {
                            var url = "https://wa.me/919426423006?text="+<?php echo json_encode($details); ?>;
                           
                            window.open(url, '_blank').focus();    
                        }
               
                 </script>