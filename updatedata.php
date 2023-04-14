<?php

$p_orvrno = $_POST['orvrno'];
$p_partyname = $_POST['partyname'];
$p_proname= $_POST['proname'];
$p_pweight = $_POST['pweight'];
$p_size = $_POST['psize'];
$p_prodetail = $_POST['prodetail'];
$p_orno = $_POST['orno'];
$p_ordt = $_POST['ordt'];
$p_disdate = $_POST['disdt'];


include 'connection.php';

$sql = "update orderpro set partyname = '$p_partyname',proname = '$p_proname',pweight = '$p_pweight',psize = '$p_size',prodetail = '$p_prodetail',orderno = $p_orno,orderdt = STR_TO_DATE('$p_ordt','%d-%m-%Y'),disdate = STR_TO_DATE('$p_disdate','%d-%m-%Y') where vrno = $p_orvrno";
$result = mysqli_query($conn,$sql) or die ("we don't want to update");
 if($result)
{
?>
    <script>
        window.location.href = '<?php echo $url; ?>update.php';
    </script>
<?php
}
mysqli_close($conn);
?>