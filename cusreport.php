<?php
include 'header.php';
include 'connection.php';
include 'session.php';
?>
<link href="p-btn.css" rel="stylesheet">
 <style>
/*    .btn-primary
    {
        margin: auto;
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        text-decoration: none;
    } */
    .btn-div
    {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
</style>


<div id="main-content">
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <!-- =========================   drop down start to select krname ========================================= -->
        <label>Customer Name </label>
            <!-- <input type="text" name="skrname" /> -->
        
           <!-- <select name="skrname" id="skrname"> -->
           <select name="scusname" id="scusname">

                <option value="allrecord">All Record</option>
                <?php
                $selcusnm = mysqli_query($conn,"select * from custoname") or die("unsuccess to fetch customer name");
                if(mysqli_num_rows($selcusnm) > 0)
                {
                    while($row3 = mysqli_fetch_assoc($selcusnm))
                    {
?>
                            <option><?php echo $row3['custonm']; ?></option>
<?php
                    }
                }
                else
                {
                    echo "<option>No Record Found</option>";
                }
                ?>
            </select>
            <!-- ===================================  end of drop down to select krname  ====================================== -->
        </div>
            <input type="submit" name="search" value="search" class="submit"/>
            <!-- <input class="submit" type="submit" name="search" value="search" /> -->
            </form> 
        
<?php 
$scusname;
?>

<?php
if(isset($_POST['search']))
{
$scusname = $_POST['scusname'];

    // echo $scusname;
        if($scusname == "allrecord")
            {

?> 
    <h1 id="title"> Pending... </h1>
    <table cellpadding="7px">
        <thead>
        <!-- <th>Kr Vr no.</th> -->
        <th>Or Vr no.</th>
        <th>Kr Name</th>
        <th>Pro Name</th>
        <th>Weight</th>
        <th>Size</th>
        <th>Pro detail</th>
        <th>OrderNo</th>
        <th>kr given date</th>
        <th>Or dis Date</th>
        <th>Status</th>
        <!-- <th>Action</th> -->
        <?php
            } // if curly bracket
        ?>
    </thead>
        <tbody>
            <?php
            if($scusname == "allrecord")
            {
                $select ="SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where status != 'complete'";
                $result = mysqli_query($conn,$select) or die("Query Unsucssful.........");
                
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
            ?>
            <tr>
                <td><?php echo $row['vrno'] ?></td>
                <td><?php echo $row['partyname'] ?></td>
                <td><?php echo $row['proname'] ?></td>
                <td><?php echo $row['pweight'] ?></td>
                <td><?php echo $row['psize'] ?></td>
                <td><?php echo $row['prodetail'] ?></td>
                <td><?php echo $row['orderno'] ?></td>
                <td><?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"] ?></td>
                <td><?php echo $row["DATE_FORMAT(disdate, '%d-%m-%Y')"] ?></td>
                <td><?php echo $row['status'] ?></td>
                <!-- <td> <a href="upkr.php?krvrno=<?php echo $row['krvrno']; ?>"> E </a> 
                    <a href="deletekr.php?krvrno=<?php echo $row['krvrno']; ?>"> D </a></td> -->

             </tr>
             <?php
                    } // lose of while loop
                } // if curly breces over 
                else
                {
                    echo "<tr><td colspan='10'><h3 id='title' style='color: red; font-weight:bold;'> No Record Found</h3></td></tr>";
                }
            
                ?>
        </tbody>
	</table>

        	<h1 id="title"> Completed... </h1>
    		<table cellpadding="7px">
        		<thead>
                <th>Or Vr no.</th>
                    <th>Customer Name</th>
                    <th>Pro Name</th>
                    <th>Weight</th>
                    <th>Size</th>
                    <th>Pro detail</th>
                    <th>OrderNo</th>
                    <th>or date</th>
                    <th>Or dilivery Date</th>
                    <th>Status</th>
    			</thead>
        		<tbody>
            	<?php
// echo $scusname;

                $select ="SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where status = 'complete'";
             $result = mysqli_query($conn,$select) or die("Query Unsucssful.........");
     
             if(mysqli_num_rows($result) > 0)
             {
            	    while($row = mysqli_fetch_assoc($result))
                    {
            	?>
            	<tr>
                <td><?php echo $row['vrno'] ?></td>
                <td><?php echo $row['partyname'] ?></td>
                <td><?php echo $row['proname'] ?></td>
                <td><?php echo $row['pweight'] ?></td>
                <td><?php echo $row['psize'] ?></td>
                <td><?php echo $row['prodetail'] ?></td>
                <td><?php echo $row['orderno'] ?></td>
                <td><?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"] ?></td>
                <td><?php echo $row["DATE_FORMAT(disdate, '%d-%m-%Y')"] ?></td>
                <td style="color:green;"><?php echo $row['status'] ?></td>
             	</tr>
                <?php 
                    } // lose of while loop
                } // if curly breces over 
                else
                {
                    echo "<tr><td colspan='10'><h3 id='title' style='color: red; font-weight:bold;'> No  Found</h3></td></tr>";
                }
                    
                ?>
             
        		</tbody>
    		</table>   
        </tbody>
    </table>
    <!-- ================================  print button  ========================================= -->
    <div class=btn-div>
        <a href="user_print.php" class="btn btn-primary"> Print Order</a>
    </div>
    <?php
            } // if curly breces   if(($skrname == "select") || ($skrname == "allrecord"))
        
        }
    ?>
    

<?php

if(isset($_POST['search']))
{   
    if(($scusname != "allrecord"))
    {
        // echo $scusname;
?>
        <h1 id="title"> <?php  echo $scusname." Pending Order Report"; ?></h1>
    		<table cellpadding="7px">
        		<thead>
                <th>Or Vr no.</th>
                    <th>Party Name</th>
                    <th>Pro Name</th>
                    <th>Weight</th>
                    <th>Size</th>
                    <th>Pro detail</th>
                    <th>OrderNo</th>
                    <th>Order date</th>
                    <th>Or dilivery Date</th>
                    <th>Status</th>
    			</thead>
        		<tbody>
        <?php
                    $krselect ="SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where partyname = '$scusname' and status != 'complete'";
                    $reskrsel = mysqli_query($conn,$krselect) or die("unsuccessfull to fetch record");
                    if(mysqli_num_rows($reskrsel) > 0)
                    {
                        while($row2 = mysqli_fetch_assoc($reskrsel))
                        {
        ?>
<tr>
                <td><?php echo $row2['vrno'] ?></td>
                <td><?php echo $row2['partyname'] ?></td>
                <td><?php echo $row2['proname'] ?></td>
                <td><?php echo $row2['pweight'] ?></td>
                <td><?php echo $row2['psize'] ?></td>
                <td><?php echo $row2['prodetail'] ?></td>
                <td><?php echo $row2['orderno'] ?></td>
                <td><?php echo $row2["DATE_FORMAT(orderdt, '%d-%m-%Y')"] ?></td>
                <td><?php echo $row2["DATE_FORMAT(disdate, '%d-%m-%Y')"] ?></td>
                <td style="color:red;"><?php echo $row2['status'] ?></td>
                          <?php
                            // if($row2['status'] == 'complete')
                            // {
                            //     echo "<td style='color:green;'><b> complete </b></td>";
                            //     echo "<td> </td>";
                            // }
                            // else if($row2['status'] != 'complete')
                            // {
                            //     echo "<td> </td>";
                            //     echo "<td style='color:red;'><b>".$row2['status']."</b></td>";
                            // }
                          ?>
</tr>
        <?php
                        }
                    }
                    else
                    {
                        echo "<tr><td colspan='10'><h3 id='title' style='color: red; font-weight:bold;'> No Record Found</h3></td></tr>";
                    }
                    ?>
                            		</tbody>
    		</table>   
        </tbody>
    </table>

                    
            <div class=btn-div>
                <a href="print_customerreport.php?cusname=<?php echo $scusname; ?>" class="btn btn-primary"> Print Order</a>
            </div>


            <h1 id="title"> <?php  echo $scusname." completed Order Report"; ?></h1>
    		<table cellpadding="7px">
        		<thead>
                <th>Or Vr no.</th>
                    <th>Party Name</th>
                    <th>Pro Name</th>
                    <th>Weight</th>
                    <th>Size</th>
                    <th>Pro detail</th>
                    <th>OrderNo</th>
                    <th>Order date</th>
                    <th>Or dilivery Date</th>
                    <th>Status</th>
    			</thead>
        		<tbody>
        <?php
                    $krselect ="SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where partyname = '$scusname' and status = 'complete'";
                    $reskrsel = mysqli_query($conn,$krselect) or die("unsuccessfull to fetch record");
                    if(mysqli_num_rows($reskrsel) > 0)
                    {
                        while($row2 = mysqli_fetch_assoc($reskrsel))
                        {
        ?>
<tr>
                <td><?php echo $row2['vrno'] ?></td>
                <td><?php echo $row2['partyname'] ?></td>
                <td><?php echo $row2['proname'] ?></td>
                <td><?php echo $row2['pweight'] ?></td>
                <td><?php echo $row2['psize'] ?></td>
                <td><?php echo $row2['prodetail'] ?></td>
                <td><?php echo $row2['orderno'] ?></td>
                <td><?php echo $row2["DATE_FORMAT(orderdt, '%d-%m-%Y')"] ?></td>
                <td><?php echo $row2["DATE_FORMAT(disdate, '%d-%m-%Y')"] ?></td>
                <td style="color:green;"><?php echo $row2['status'] ?></td>
</tr>
        <?php
                        }
                    }
                    else
                    {
                        echo "<tr><td colspan='10'><h3 id='title' style='color: red; font-weight:bold;'> No Record Found</h3></td></tr>";
                    }
                    ?>
                            		</tbody>
    		</table>   
        </tbody>
    </table>

                    
                    <div class=btn-div>
                        <a href="krreportprint.php?krname=<?php echo $skrname; ?>" class="btn btn-primary"> Print Order</a>
                    </div>
                <?php
                }
            }
        ?>
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
onclick="gotowhatsapp()"
>
<img
  src="https://trickuweb.com/whatsapp.png"
  alt=""
  height="50px"
  width="50px"
/>
</span>
        <?php
        // ==========================================  whatsapp notifaction  ============================================
        $todaydt = date('Y-m-d');
        $wh_scrc = mysqli_query($conn,"select * from krissue where krdisdate <= STR_TO_DATE('$todaydt','%Y-%m-%d') and status = 'pending'") or die("unsuccessful to search");
        if(mysqli_num_rows($wh_scrc) > 0)
        {
            $rw = 0;
            while($row4 = mysqli_fetch_assoc($wh_scrc))
            {
                $detail[$rw] = "%0a %0aCONTACT ". $row4['krname']." TO RECIVE ORDER"
                                ."%0a"."Krvrno   :   ".$row4['krvrno']
                                ."%0a"."Order vrno   :   ".$row4['ovrno']
                                ."%0a"."Kariger Name   :   ".$row4['krname']
                                ."%0a"."Product Name   :   ".$row4['proname']
                                ."%0a"."Product Weight   :   ".$row4['proweight']
                                ."%0a"."Product Size   :   ".$row4['prosize']
                                ."%0a"."Product Detail   :   ".$row4['prodetail']
                                ."%0a"."Karigar Given Date    :   ".$row4['krgdate']
                                ."%0a"."Product Dilivery Date   :   ".$row4['prodisdate'];
                          $rw++;      
            }
        }
        // for($j = 0;$j<$rw;$j++)
        // {
        //     echo $detail[$j]."<br><br>";
        // }
        // echo "hi";
        
        ?>
        <script>
            function gotowhatsapp()
            {
                var url = "https://wa.me/919426423006?text="+<?php echo json_encode($detail); ?>;

                window.open(url, '_blank').focus();
            }
        </script>