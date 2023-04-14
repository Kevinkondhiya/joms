<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include 'connection.php';
$ovrno = $_GET['vrno'];
if($ovrno != null)
{
    // echo $ovrno;

    $krnum = mysqli_query($conn,"SELECT custonm, custonum,orderpro.proname,orderpro.pweight,orderpro.psize,orderpro.prodetail,orderpro.orderno, DATE_FORMAT(orderpro.orderdt, '%d-%m-%Y'), DATE_FORMAT(orderpro.disdate, '%d-%m-%Y') from custoname INNER JOIN orderpro on orderpro.partyname = custoname.custonm INNER join krissue on krissue.ovrno = orderpro.vrno where orderpro.vrno = $ovrno;");

    if(mysqli_num_rows($krnum) > 0)
    {  
        while($row4 = mysqli_fetch_assoc($krnum))
        {
            $custonumber =  $row4['custonum'];
            $custonm = $row4['custonm'];
            $proname = $row4['proname'];
            $proweight = $row4['pweight'];
            $prosize = $row4['psize'];
            $prodetail = $row4['prodetail'];
            $orderno = $row4['orderno'];
            $orderdt = $row4["DATE_FORMAT(orderpro.orderdt, '%d-%m-%Y')"];
            $ordisdt = $row4["DATE_FORMAT(orderpro.disdate, '%d-%m-%Y')"];
        }
    }
}
?>
<input type="text" name="custonumber" id="custonumber" value="<?php echo $custonumber; ?>" />
<input type="text" name="custonm" id="custonm" value="<?php echo $custonm; ?>" />
<input type="text" name="orderdt" id="orderdt" value="<?php echo $orderdt; ?>" />
<input type="text" name="ordisdt" id="ordisdt" value="<?php echo $ordisdt; ?>" />
<input type="text" id="pronm" value="<?php echo $proname; ?>">
<input type="text" id="proweight" value="<?php echo $proweight; ?>">
<input type="text" id="prosize" value="<?php echo $prosize; ?>">
<input type="text" id="prodetail" value="<?php echo $prodetail; ?>">
<input type="text" id="orderno" value="<?php echo $orderno; ?>">

<input type="button" onclick="gotowhatsapp()" value="send message">
<script>
function gotowhatsapp()
{
    
    var custonum = document.getElementById("custonumber").value;
    var custonm = document.getElementById("custonm").value;
    var pnm = document.getElementById("pronm").value;
    var pw = document.getElementById("proweight").value;
    // document.write(pw);
    var ps = document.getElementById("prosize").value;
    var pdet = document.getElementById("prodetail").value;
    var orderno = document.getElementById("orderno").value;
    var orderdt = document.getElementById("orderdt").value;
    var ordisdt = document.getElementById("ordisdt").value;

    if( custonm != null && custonum != null && orderno != null)
    {
        // alert("data geting");
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

    console.log(url);
    }
    else
    {
        alert("error");
    }
}
</script>
    </body>
</html>