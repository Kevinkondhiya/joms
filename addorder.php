<?php 
include 'header.php'; 
include 'connection.php';
include 'session.php';
?>
<!-- =============  button stylesheet  ==================== -->
<link href="p-btn.css" rel="stylesheet">
<div id="main-content">
    <h1 id="title">Add New Order</h1>
    <form  action="" method="post" class="post-form">
    <?php
    // ==================================  order vrno auto increment   ================================
        $vr = "select * from orderpro";
        $vrresult =mysqli_query($conn,$vr) or die("error vr no select");
        if(mysqli_num_rows($vrresult) == 0)
        {
            $vrno = 1;
        }
        else if(mysqli_num_rows($vrresult) > 0)
        {
            while($row = mysqli_fetch_assoc($vrresult))
            {
                $vrwhno = $row['vrno'];
            }
            $vrno = $vrwhno + 1;
        }
            // ==================================  order vrno auto increment end   ================================

    ?>
        <div class="form-group">
        <label>Vr No.</label>
        <input type="hidden" name="vro" value="<?php echo $vrno; ?>" />
        <input type="number" value="<?php echo $vrno; ?>" disabled/>

        <!-- <input type="text" name="vrno" value="2 <?php // echo $vrno; ?>" /> -->
        </div>

        <div class="form-group">
        <label>Party Name</label>
        <select name="custonm" id="custonm">
            <option>--Select--</option>
        <?php
            $selcustonm = mysqli_query($conn,"select * from custoname order by custonm") or die("Unsuccessfull to fetch record");
            if(mysqli_num_rows($selcustonm) > 0)
            {
                while($row4 = mysqli_fetch_assoc($selcustonm))
                {
                    ?>
                        <option><?php echo $row4['custonm']; ?></option>
                    <?php
                }
            }
        ?>
        </select>
        <!-- <input type="text" name="partyname" required /> -->
        </div>

        <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="proname" required/>
        </div>

        <div class="form-group">
        <label>Weight</label>
        <input type="text" name="weight" required/>
        </div>

        <div class="form-group">
        <label>Size</label>
        <input type="text" name="size" required/>
        </div>

        <div class="form-group">
        <label> product details </label>
        <input type="textarea" name="prodetail" required/>
        </div>

        <div class="form-group">
        <label>Order no.</label>
        <input type="number" name="orderno" required/>
        </div>
<?php
$date = date('d-m-Y');
//echo $date;
?>
        <div class="form-group">
            <label> Order Date </label>
            <input type="text" name="odate" value="<?php echo $date; ?>" required/>
        </div>

        <div class="form-group">
            <label> Dispatch Date </label>
            <input type="date" name="ddate" required />
        </div>
        <input class="submit" name="submit" type="submit" value="Save"  />
    </div>
    </form>
<div style="display: flex; justify-content: center;">
    <a href="print-order.php" class="btn btn-primary"> Print</a>
</div>

<?php
// ===================================   SELECT NUMBER OF customer  ====================
if(isset($_POST['submit']))
{
    $m_pro = $_POST['vro'];
    //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$m_pro."demo";
    $m_ptname = $_POST['custonm'];
    $m_proname = $_POST['proname'];
    $m_weight = $_POST['weight'];
    $m_size = $_POST['size'];
    $m_prodetail = $_POST['prodetail'];
    $m_ono = $_POST['orderno'];
    $m_odate = $_POST['odate'];
    $m_ddate = $_POST['ddate'];

    $custonum = mysqli_query($conn,"select * from custoname where custonm = '$m_ptname'") or die("unsuccess to select number");
    if(mysqli_num_rows($custonum) > 0)
    {
        while($cust_row = mysqli_fetch_assoc($custonum))
        {
            $custo_num = $cust_row['custonum'];
        }
    }


    // $ordate = "STR_TO_DATE('$m_odate','%y-%m-%d')";
    // echo $m_odate;
    //$insert = "insert into orderpro(vrno,partyname,proname,pweight,psize,prodetail,orderno,orderdt,disdate) values(4,'pbdhari','mle','55.00','213','mle',2,'10-06-2022','20-06-2022')";

    $insert = "insert into orderpro(vrno,partyname,proname,pweight,psize,prodetail,orderno,orderdt,disdate) values($m_pro,'$m_ptname','$m_proname','$m_weight','$m_size','$m_prodetail',$m_ono,STR_TO_DATE('$m_odate','%d-%m-%Y'),STR_TO_DATE('$m_ddate','%Y-%m-%d'))";


    $result = mysqli_query($conn,$insert) or die("rercord does not inserted successfully");
    if(isset($result))
    {
        // $disdate = date_format($m_ddate,'d-m-Y');
        // echo $disdate; 
    ?>
    <input type="hidden" name="cusnum" id="cusnum" value="<?php echo $custo_num; ?>">
    <input type="hidden" name="ptnm" id="ptnm" value="<?php echo $m_ptname; ?>">
    <input type="hidden" name="pronm" id="pronm" value="<?php echo $m_proname; ?>">
    <input type="hidden" name="pw" id="pw" value="<?php echo $m_weight; ?>">
    <input type="hidden" name="ps" id="ps" value="<?php echo $m_size; ?>">
    <input type="hidden" name="pdetail" id="pdetail" value="<?php echo $m_prodetail; ?>">
    <input type="hidden" name="bookorno" id="bookorno" value="<?php echo $m_ono; ?>">
    <input type="hidden" name="ordt" id="ordt" value="<?php echo $m_odate; ?>">
    <input type="hidden" name="disdt" id="disdt" value="<?php echo $m_ddate; ?>">

        <script>
    <?php echo $custo_num; ?>

            var ptnm = document.getElementById("ptnm").value;
            // if((ptnm == "PB") || (ptnm == "PB ") || (ptnm == " PB ") || (ptnm == " PB"))
            // {
                var custonum = document.getElementById("cusnum").value;
                var pronm = document.getElementById("pronm").value;
                var pw = document.getElementById("pw").value;
                var ps = document.getElementById("ps").value;
                var pdetail = document.getElementById("pdetail").value;
                var bookorno = document.getElementById("bookorno").value;
                var ordt = document.getElementById("ordt").value;
                var disdt = document.getElementById("disdt").value;

                // var url = "https://wa.me/919979740360?text=" 
                var url = "https://wa.me/"+custonum+"?text=" 
        + "Customer Name   :   " + ptnm + "%0a"
        + "Product Name   :   " + pronm + "%0a"
        + "Product Weight   :   " + pw + "%0a"
        + "Product Size   :   " + ps + "%0a"
        + "Product Detail   :   " + pdetail + "%0a"
        + "Order No   :   " + bookorno + "%0a"
        + "Order Date   :   " + ordt + "%0a"
        + "Product Delivery Date   :   " + disdt; 

        window.open(url, '_blank').focus();

        window.location.href = '<?php echo $url; ?>addorder.php';

            // }
            // else
            // {

            //     window.location.href = 'http://knkk.unaux.com/madhuvankr/addorder.php';
            // }
            
        </script>
            <!-- header('Location:http://knkk.unaux.com/madhuvankr'); -->
    <?php
    }
}
?>
<!-- <div style="display: flex; justify-content: center;">
    <a href="print-order.php" class="btn btn-primary"> Print</a>
</div> -->