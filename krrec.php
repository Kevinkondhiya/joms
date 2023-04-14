<?php
include 'header.php';
include 'connection.php';
include 'session.php';

?>

<div id="main-content">
    <h1 id="title">Karigar Receive</h1>
    <form action="" method="POST" class="post-form">

        <?php
        $secvr = "select krvrno from krissue where status = 'pending' ORDER BY krvrno ASC ";
        $ressecvr = mysqli_query($conn,$secvr) or die("fail to search record");
        ?>
        <div class="form-group">
            <label>Kr Vr No.</label>
            <select name="krvrno" id="krvrno">
            	<option>Select</option>

<?php
                if(mysqli_num_rows($ressecvr) > 0)
                {
                    while($row = mysqli_fetch_assoc($ressecvr))
                    {
?>
                        <option><?php echo $row['krvrno']; ?></option>
                        <!-- ========================end of drop down================================= -->
<?php
                    }
                }   //if br
?>
         </select>
     </div>
         <!-- ======================   end of drop down   ======================== -->
    <button class="save-button submit" name="save-button" id="save-button">Search</button>
</form>

<?php
        $karigarvrno;

    if (isset($_POST['save-button']))
    {
        $karigarvrno = $_POST['krvrno'];
    
if($karigarvrno != "Select")
{
    if (isset($_POST['save-button']))
    {
            // echo $karigarvrno;
			//echo "$karigarno";
		
		    $fetdet = "select *,DATE_FORMAT(krgdate,'%d-%m-%Y'),DATE_FORMAT(prodisdate,'%d-%m-%Y') from krissue where krvrno = $karigarvrno";
		    $resfetdet = mysqli_query($conn,$fetdet) or die("unsuccess to fetch details");
		    if (mysqli_num_rows($resfetdet) > 0) 
		    {
		        while($row3 = mysqli_fetch_assoc($resfetdet))
		        {	
                    $kkrno = $row3['krvrno'];
		        	$kkname = $row3['krname'];
		            $kproname = $row3['proname'];
		            $kweight = $row3['proweight'];
		            $ksize = $row3['prosize'];
		            $kprodetail = $row3['prodetail'];
                    $orno = $row3['ovrno'];
		            $kgivendate = $row3["DATE_FORMAT(krgdate,'%d-%m-%Y')"];
		            $kprodisdt = $row3["DATE_FORMAT(prodisdate,'%d-%m-%Y')"];
		            //echo "$ksize";
		            //$kdisdate = $row3['disdate'];
		        }
		    }
		}
	}
    else
    {
        echo "<script>alert('Please Select Any Karigar Vr No');</script>";
    }
}

?>


<form action="" method="POST" class="post-form">
<input type="hidden" name="karvrno" value="<?php echo $kkrno; ?>">
<input type="hidden" name="orno" value="<?php echo $orno; ?>">

        <div class="form-group">
            <label>Karigar Name</label>
            <input type="text" name="kname" id="kname" 
            value="<?php if (isset($_POST['save-button'])) {
            echo $kkname;
        } ?>" required/>
        </div>

        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="proname" id="pronm"
            value="<?php if (isset($_POST['save-button'])) {
            echo $kproname;
        } ?>" />
        </div>
 
        <div class="form-group">
            <label>Weight</label>
            <input type="text" name="proweight" id="proweight"
            value="<?php if (isset($_POST['save-button'])) {
            echo $kweight;
        } ?>" />
        </div>

        <div class="form-group">
            <label>Size</label>
            <input type="text" name="prosize" id="prosize"
            value="<?php if (isset($_POST['save-button'])) {
            echo $ksize;
        } ?>" />
        </div>

        <div class="form-group">
            <label> product details </label>
            <input type="textarea" name="prodetail" id="prodetail"
            value="<?php if (isset($_POST['save-button'])) {
            echo $kprodetail;
        } ?>" />
        </div>

        <div class="form-group">
            <label>Kr Given Date </label>
            <input type="text" name="krgidate" id="krgidate"
            value="<?php if (isset($_POST['save-button'])) {
            echo $kgivendate;
        } ?>" />
        </div>

        <div class="form-group">
            <label>Kr Dispatch Date </label>
            <input type="text" name="krdisdt" 
            value="<?php echo date('d-m-Y'); ?>" />
        </div>

        <div class="form-group">
            <label>Pro Dispatch Date </label>
            <input type="text" name="prodisdate" id="krdisdt"
            value="<?php if (isset($_POST['save-button'])) {
            echo $kprodisdt;
        } ?>" />

    </div>
       <input class="submit" type="submit" value="Receive" onclick="gotowhatsapp()" name="recive" />
    </form>


<?php
$krvarno;
$up_kdisdt;
if (isset($_POST['recive']))
{
    $krvarno = $_POST['karvrno'];
    $up_kdisdt = $_POST['krdisdt'];
    // $krnm = $_POST['kname'];
    $or_no = $_POST['orno'];
    $up_kname = "recived from ". $_POST['kname'];
    
    // echo "$up_kname";
    
    $up_orderpro = mysqli_query($conn,"update orderpro set status = '$up_kname' where vrno = $or_no");
    
    $kres = mysqli_query($conn,"update krissue set status = 'recive', krdisdate = STR_TO_DATE('$up_kdisdt','%d-%m-%Y') where krvrno = $krvarno");

    $up_string = $up_orderpro."; ".$kres;
    // $up_orpro = mysqli_query($conn,$up_orderpro) or die("unsuccess to update orderpro");
    // if($up_orpro)
    // {
    //     echo "success";
    // }
    if($up_orderpro)
    {
        echo "success ";
    }
    if($kres)
    {
        echo "success";
    }
}

$krnum = mysqli_query($conn,"SELECT custonm, custonum, DATE_FORMAT(orderpro.orderdt, '%d-%m-%Y'), DATE_FORMAT(orderpro.disdate, '%d-%m-%Y') from custoname INNER JOIN orderpro on orderpro.partyname = custoname.custonm INNER join krissue on krissue.ovrno = orderpro.vrno where krissue.krvrno = $karigarvrno;") or die("");
    if(mysqli_num_rows($krnum) > 0)
    {  
        while($row4 = mysqli_fetch_assoc($krnum))
        {
            $custonm = $row4['custonm'];
            $custonumber =  $row4['custonum'];
            $orderdt = $row4["DATE_FORMAT(orderpro.orderdt, '%d-%m-%Y')"];
            $ordisdt = $row4["DATE_FORMAT(orderpro.disdate, '%d-%m-%Y')"];

        }
    }
    elseif(!($krnum))
  // echo $orderdt;
?>
<input type="hidden" name="custonumber" id="custonumber" value="<?php echo $custonumber; ?>" />
<input type="hidden" name="custonm" id="custonm" value="<?php echo $custonm; ?>" />
<input type="hidden" name="orderdt" id="orderdt" value="<?php echo $orderdt; ?>" />
<input type="hidden" name="ordisdt" id="ordisdt" value="<?php echo $ordisdt; ?>" />

<script>
function gotowhatsapp()
{
    var custonum = document.getElementById("custonumber").value;
    var custonm = document.getElementById("custonm").value;
    var pnm = document.getElementById("pronm").value;
    var pw = document.getElementById("proweight").value;
    var ps = document.getElementById("prosize").value;
    var pdet = document.getElementById("prodetail").value;
    var orderdt = document.getElementById("orderdt").value;
    var ordisdt = document.getElementById("ordisdt").value;

    var url = "https://wa.me/"+custonum+"?text="
    + "***  ORDER COMPLETED  ***" +"%0a"
    + "Customer Name   :   " + custonm + "%0a"
    + "Product Name   :   " + pnm + "%0a"
    + "Product Weight   :   " + pw  + "%0a"
    + "Product Size   :   " + ps + "%0a"
    + "Product Detail   :   " + pdet + "%0a"
    + "Product Date   :   " + orderdt + "%0a"
    + "Product Delivery Date   :   " + ordisdt;

    window.open(url, '_blank').focus();
    window.location.href = '<?php echo $url; ?>krrec.php';

}

// window.location.href = 'http://knkk.unaux.com/madhuvankr/krrec.php';
</script>
<?php

?>