 <?php
include 'header.php';
include 'connection.php';
include 'session.php';
?>
<!-- =============  button stylesheet  ==================== -->
<link href="p-btn.css" rel="stylesheet">

<div id="main-content">
    <h1 id="title">Karigar issue</h1>
    <?php
        // ===================== AI kr karigar vrno. ===============================
        $kr = "select * from krissue";
        $krresult = mysqli_query($conn,$kr) or die("error kar no select");
        if (mysqli_num_rows($krresult) == 0) {
            $krno = 1;
        } else if (mysqli_num_rows($krresult) > 0) {
            while ($row = mysqli_fetch_assoc($krresult)) {
                $krwhno = $row['krvrno'];
            }
            $krno = $krwhno + 1;
        }
        //-------------------------end karigar vr no AI ----------------------
        ?>


<?php
// ======================  drop down order no. select  ===========================
        $secvr = "select vrno from orderpro where status = 'pending' ORDER BY id ASC ";
        $ressecvr = mysqli_query($conn, $secvr) or die("fail to search record");
?>
        <!-- =========================  form 1 start  =============================== -->
    <form action="" method="POST" class="post-form">
        <div class="form-group">
            <label>Kr Vr No.</label>
            <input type="hidden" name="karvrno" value="<?php echo $krno; ?>" />
            <input type="number" value="<?php echo $krno; ?>" disabled />
        </div>
                    <!-- ======================= dropdown start =========================== -->
        
        <div class="form-group">
            <label>Order Vr No.</label>
            <select name="inputvr" id="inputvr">
                <option>select</option>
                <?php
                // foreach($options as $option)
                // {
                if ($ressecvr->num_rows > 0) {
                    while ($row = $ressecvr->fetch_assoc()) {
                        //echo $row['vrno'];

                ?>

                        <option><?php echo $row['vrno']; ?></option>
                        <?php
                    }
                }   //if br
                ?>
            </select>
            <!-- ========================    end of drop down    ================================= -->


            <!-- <div class="form-group"> -->
            <!-- <label>Order Vr No.</label> -->
            <!-- <input type="text" name="inputvr" /> -->
            <!-- </div> -->
        </div>

        <button class="save-button submit" name="save-button" name="save-button">Add</button> <br>
    </form>


    <?php
    // ===========================   FORM 2 add DETAILS ================================
    
    if(isset($_POST['save-button']))
    {
        $karvrno = $_POST['karvrno'];
        $ordernumber = $_POST['inputvr'];
        if($ordernumber != "select")
        {
            $fetdet="select *,DATE_FORMAT(disdate, '%d-%m-%Y') from orderpro where vrno = $ordernumber";
            $resfetdet = mysqli_query($conn,$fetdet) or die("unsuccess to fetch details");
            if (mysqli_num_rows($resfetdet) > 0)
            {
                while ($row3 = mysqli_fetch_assoc($resfetdet))
                {
                    $fprordervrno=$row3['vrno'];
                    $fproname=$row3['proname'];
                    $fweight=$row3['pweight'];
                    $fsize=$row3['psize'];
                    $fprodetail=$row3['prodetail'];
                    $fdisdate=$row3["DATE_FORMAT(disdate, '%d-%m-%Y')"];
                }
            }
        }
        else
        {
            echo '<script>alert("please select vr. no. ");</script>';
        }
    }
    // ==============================   form 2 end add details   ===========================================
    ?>

    <!-- =================================    START FORM 2   ========================================== -->
    <?php // echo $karvrno ?>
    <form action="" method="post" class="post-form">
        <input type="hidden" value="<?php echo $fprordervrno; ?>" name="ordrvrno">
        <input type="hidden" name="karigarvrno" value="<?php echo $karvrno; ?>">

        <div class="form-group">
            <label>Karigar Name</label>
            <!-- ==========  krname dropdown start ================================================== -->
            <select name="krgname" id="krgname">
                <option>select</option>
                <?php
                $selkrnm = mysqli_query($conn,"select krname from karigarname") or die("Unsuccessfull to fetch record");
                if(mysqli_num_rows($selkrnm) > 0)
                {
                    while($row4 = mysqli_fetch_assoc($selkrnm))
                    {
                        ?>
                            <option><?php echo $row4['krname']; ?></option>
                        <?php
                    }
                }
                ?>        
            </select>
            <!-- ===========================  end of krname dropdown  =============================== -->
            <!-- <input type="text" name="kname" style="text-align: left;" required/> -->
        </div>



        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="proname" style="text-align: left;" value="<?php if (isset($_POST['save-button'])) {
                echo $fproname;
        } ?>" required />
        </div>

        <div class="form-group">
            <label>Weight</label>
            <input type="text" name="proweight" 
            value="<?php if (isset($_POST['save-button'])) {
            echo $fweight;
        } ?>" required />
        </div>

        <div class="form-group">
            <label>Size</label>
            <input type="text" name="prosize" 
            value="<?php if (isset($_POST['save-button'])) {
            echo $fsize;
        } ?>" required />
        </div>

        <div class="form-group">
            <label> product details </label>
            <input type="textarea" name="prodetail" 
            value="<?php if (isset($_POST['save-button'])) {
            echo $fprodetail;
        } ?>" required />
        </div>

        <div class="form-group">
            <label>Kr Given Date </label>
            <input type="text" name="krgidate" 
            value="<?php echo date('d-m-Y'); ?>" required />
        </div>

        <div class="form-group">
            <label>Kr Dispatch Date </label>
            <input type="date" name="krdisdate" required />
        </div>

        <div class="form-group">
            <label>Pro Dispatch Date </label>
            <input type="text" name="prodisdate" 
            value="<?php if (isset($_POST['save-button'])) {
            echo $fdisdate;
        } ?>" required />

        </div>
        <input class="submit" type="submit" value="Save" name="save"/>
    </form>

<?php
if(isset($_POST['save']))
{

    $a_orvrno = $_POST['ordrvrno'];
    // echo $a_orvrno;
    // echo $ordernumber;
    $a_karigarvrno = $_POST['karigarvrno'];
    // echo $krno;
    $a_kname = $_POST['krgname'];
    $a_proname = $_POST['proname'];
    $a_weight = $_POST['proweight'];
    $a_size = $_POST['prosize'];
    $a_prodetail = $_POST['prodetail'];
    $a_krgivdate = $_POST['krgidate'];
    $a_krdisdate = $_POST['krdisdate'];
    $a_prodisdate = $_POST['prodisdate'];
    // echo $a_orvrno."<br>";
    // echo $a_kname."  ,".$a_proname."  ,".$a_weight."  ,".$a_size."  ,".$a_prodetail."  ,".$a_krgivdate."  ,".$a_krdisdate."  ,".$a_prodisdate;
    // ====================  update orderpro ==============================
    $up_orpro = mysqli_query($conn,"update orderpro set status = '$a_kname' where vrno = $a_orvrno") or die("unsuccess to update orderpro");
    if($up_orpro)
    {
        $adddetail = mysqli_query($conn,"insert into krissue(krvrno,ovrno,krname,proname,proweight,prosize,prodetail,krgdate,krdisdate,prodisdate) values($a_karigarvrno,$a_orvrno,'$a_kname','$a_proname','$a_weight','$a_size','$a_prodetail',STR_TO_DATE('$a_krgivdate','%d-%m-%Y'),STR_TO_DATE('$a_krdisdate','%Y-%m-%d'),STR_TO_DATE('$a_prodisdate','%d-%m-%Y'))") or die("could not insert record..........");
        if($adddetail)
        {
            // echo "success";
        
    
// ===============================    update kr name into orderpro  ===============

// $adddetail = "insert into krissue(krvrno,ovrno,krname,proname,proweight,prosize,prodetail,krgdate,krdisdate,prodisdate) values($akrvrno,$aorderno,'$a_kname','$a_proname','$a_weight','$a_size','$a_prodetail',STR_TO_DATE('$a_krgivdate','%d-%m-%Y'),STR_TO_DATE('$a_krdisdate','%Y-%m-%d'),STR_TO_DATE('$a_prodisdate','%d-%m-%Y'))";

    //echo $adddetail;
    
    // $resadddetail = mysqli_query($conn,$adddetail) or die("could not insert record..........");
    // if($resadddetail)
    // {
        $sckrnum = mysqli_query($conn,"select * from karigarname where krname = '$a_kname'") or die("cant search number");
        if(mysqli_num_rows($sckrnum) > 0)
        {
            while($rownum = mysqli_fetch_assoc($sckrnum))
            {
                $krnumber = $rownum['krnumber'];
            }
        }
?>

        <input type="hidden" id="knm" value="<?php echo $a_kname; ?>">
        <input type="hidden" id="krnum" value="<?php echo $krnumber; ?>">
        <input type="hidden" id="pnm" value="<?php echo $a_proname; ?>">
        <input type="hidden" id="pw" value="<?php echo $a_weight; ?>">
        <input type="hidden" id="ps" value="<?php echo $a_size; ?>">
        <input type="hidden" id="pdetail" value="<?php echo $a_prodetail; ?>">
        <input type="hidden" id="krgdt" value="<?php echo $a_krgivdate; ?>">
        <input type="hidden" id="krdisdt" value="<?php echo $a_krdisdate; ?>">
    <script>
        // window.location.href = 'http://knkk.unaux.com/madhuvankr/karigarisu.php';
        // var i = document.getElementById("rw").value;
        var krnm = document.getElementById("knm").value;
        var krnumber = document.getElementById("krnum").value;
        var pnm = document.getElementById("pnm").value;
        var pw = document.getElementById("pw").value;
        var ps = document.getElementById("ps").value;
        var pdetail = document.getElementById("pdetail").value;
        var krgdt = document.getElementById("krgdt").value;
        var krdisdt = document.getElementById("krdisdt").value;

        var url = "https://wa.me/"+krnumber+"?text=" 
    + "Karigar Name   :   " + krnm + "%0a"
    + "Product Name   :   " + pnm + "%0a"
    + "Product Weight   :   " + pw  + "%0a"
    + "Product Size   :   " + ps + "%0a"
    + "Product Detail   :   " + pdetail + "%0a"
    + "Karigar Given Date   :   " + krgdt + "%0a"
    + "Product Delivery Date   :   " + krdisdt;

      

    window.open(url, '_blank').focus();
        window.location.href = '<?php echo $url; ?>karigarisu.php';

    </script>
<?php
        }
    }
    else
    {
        echo "<script> alert(Can't Insert Record); </script>";
    }
}
// }
?>
<div style="display: flex; justify-content: center;">
    <a href="print-krissue.php" class="btn btn-primary"> Print</a>
</div>

        <!-- ===========================   END FORM 2   ===================== -->

        <!-- =======================  whatsapp =============================== -->
