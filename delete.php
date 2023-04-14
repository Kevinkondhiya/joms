<?php
include 'header.php'; 
include 'connection.php';
$kr_del = $_GET['vrno'];
$delete = "delete from orderpro where vrno = '$kr_del'";
$resdel = mysqli_query($conn,$delete) or die("unsuccessful");
if($resdel)
{
    ?>
<script>
    window.location.href = '<?php echo $url; ?>allorder.php';
</script>

    <?php
}
?>