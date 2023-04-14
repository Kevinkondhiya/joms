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
    .whatsappimg
    {
        height: 20px;
        width: 20px;
        background-color: white;
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
        $selvrno = mysqli_query($conn,"SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') from orderpro INNER JOIN krissue ON krissue.ovrno = orderpro.vrno where krissue.status = 'recive' AND orderpro.status != 'complete' AND orderpro.status != 'pending' And orderno = $selorno;") or die("could not search record");
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

    <h2 id="title"> Pending Complete Order </h2>
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
function getwh()
{
    echo "hello";
}
        $select = "SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') from orderpro INNER JOIN krissue ON krissue.ovrno = orderpro.vrno where krissue.status = 'recive' AND orderpro.status != 'complete' AND orderpro.status != 'pending'";
        $result = mysqli_query($conn, $select) or die("Query Unsucssful.........");

        if (mysqli_num_rows($result) > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
?>
                <tr>
                    <td><?php echo $row['vrno']; ?></td>
                    <td style="color:green; font-weight:bold;"><?php echo $row['partyname']; ?></td>
                    <td> <?php echo $row['proname']; ?> </td>
                    <td><?php echo $row['pweight']; ?></td>
                    <td><?php echo $row['psize']; ?></td>
                    <td><?php echo $row['prodetail']; ?></td>
                    <td><?php echo $row['orderno']; ?></td>
                    <td><?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"]; ?></td>
                    <td><?php echo $row["DATE_FORMAT(disdate, '%d-%m-%Y')"]; ?></td>
                    <td style="color:red;font-weight:bold;"><?php echo ucfirst($row["status"]); ?></td>

                    <!-- <input type="hidden" id="pronm" value="<?php echo $row['proname']; ?>">
                    <input type="hidden" id="proweight" value="<?php echo $row['pweight']; ?>">
                    <input type="hidden" id="prosize" value="<?php echo $row['psize']; ?>">
                    <input type="hidden" id="prodetail" value="<?php echo $row['prodetail']; ?>">
                    <input type="hidden" id="orderno" value="<?php echo $row['orderno']; ?>">
                    <input type="hidden" id="orderdt" value="<?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"]; ?>">
                    <input type="hidden" id="disdt" value="<?php echo $row["DATE_FORMAT(disdate, '%d-%m-%Y')"]; ?>"> -->


                    <td style="display: flex; justify-content: space-between;">
                        <a href="editorder.php?vrno=<?php echo $row['vrno']; ?>">C</a>
                        <a href="delete.php?vrno=<?php echo $row['vrno']; ?>">D</a>
                        
                        <!-- <span><a href="pendingcompleteorder.php?vrno=<?php echo $row['vrno'] ?>" onclick="gotowhatsapp()"><img src="images/whatsapp.png" alt="whatsapp icon" class="whatsappimg"/></span></a> -->

                        <span><a href="viewpendingorder.php?vrno=<?php echo $row['vrno'] ?>"><img src="images/whatsapp.png" alt="whatsapp icon" class="whatsappimg"/></span></a>

                        <!-- <span><a href="pendingcompleteorder.php?vrno=<?php echo $row['vrno'] ?>"><img src="images/whatsapp.png" alt="whatsapp icon" class="whatsappimg"/></span></a> -->


                    </td>
                </tr>
        <?php
            } // lose of while loop
        } // if curly breces over 
        else
        {
            echo "<tr><td colspan='11'><h3 id='title' style='color: red; font-weight:bold;'> No Record Found</h3></td></tr>";
        }
        ?>
    </table>
  
    <div style="display: flex; justify-content: center;">
                <a href="pendingcompleteorder_print.php" class="btn btn-primary"> Print </a>
    </div>

<?php

// $ovrno = $_GET['vrno'];
// if($ovrno != null)
// {
//     // echo $ovrno;

//     $krnum = mysqli_query($conn,"SELECT custonm, custonum,orderpro.proname,orderpro.pweight,orderpro.psize,orderpro.prodetail,orderpro.orderno, DATE_FORMAT(orderpro.orderdt, '%d-%m-%Y'), DATE_FORMAT(orderpro.disdate, '%d-%m-%Y') from custoname INNER JOIN orderpro on orderpro.partyname = custoname.custonm INNER join krissue on krissue.ovrno = orderpro.vrno where orderpro.vrno = $ovrno;");

//     if(mysqli_num_rows($krnum) > 0)
//     {  
//         while($row4 = mysqli_fetch_assoc($krnum))
//         {
//             $custonumber =  $row4['custonum'];
//             $custonm = $row4['custonm'];
//             $proname = $row4['proname'];
//             $proweight = $row4['pweight'];
//             $prosize = $row4['psize'];
//             $prodetail = $row4['prodetail'];
//             $orderno = $row4['orderno'];
//             $orderdt = $row4["DATE_FORMAT(orderpro.orderdt, '%d-%m-%Y')"];
//             $ordisdt = $row4["DATE_FORMAT(orderpro.disdate, '%d-%m-%Y')"];
//         }
//     }
// }
?>
<!-- <input type="text" name="custonumber" id="custonumber" value="<?php echo $custonumber; ?>" />
<input type="text" name="custonm" id="custonm" value="<?php echo $custonm; ?>" />
<input type="text" name="orderdt" id="orderdt" value="<?php echo $orderdt; ?>" />
<input type="text" name="ordisdt" id="ordisdt" value="<?php echo $ordisdt; ?>" />
<input type="text" id="pronm" value="<?php echo $proname; ?>">
<input type="text" id="proweight" value="<?php echo $proweight; ?>">
<input type="text" id="prosize" value="<?php echo $prosize; ?>">
<input type="text" id="prodetail" value="<?php echo $prodetail; ?>">
<input type="text" id="orderno" value="<?php echo $orderno; ?>"> -->
<script>
// function gotowhatsapp()
// {
    
//     var custonum = document.getElementById("custonumber").value;
//     var custonm = document.getElementById("custonm").value;
//     var pnm = document.getElementById("pronm").value;
//     var pw = document.getElementById("proweight").value;
//     // document.write(pw);
//     var ps = document.getElementById("prosize").value;
//     var pdet = document.getElementById("prodetail").value;
//     var orderno = document.getElementById("orderno").value;
//     var orderdt = document.getElementById("orderdt").value;
//     var ordisdt = document.getElementById("ordisdt").value;

//     if( custonm != null && custonum != null && orderno != null)
//     {
//         // alert("data geting");
//         var url = "https://wa.me/"+custonum+"?text="
//     + "***  ORDER COMPLETED  ***" +"%0a"
//     + "Customer Name   :   " + custonm + "%0a"
//     + "Product Name   :   " + pnm + "%0a"
//     + "Product Weight   :   " + pw  + "%0a"
//     + "Product Size   :   " + ps + "%0a"
//     + "Product Detail   :   " + pdet + "%0a"
//     + "Product Date   :   " + orderdt + "%0a"
//     + "Product Delivery Date   :   " + ordisdt;

//     // window.open(url, '_blank').focus();

//     console.log(url);
//     }
//     else
//     {
//         alert("error");
//     }


// }

// window.location.href = 'http://knkk.unaux.com/madhuvankr/krrec.php';
</script>