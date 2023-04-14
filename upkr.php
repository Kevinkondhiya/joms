x<?php
include 'header.php';
include 'connection.php';
include 'session.php';

$krvrno = $_GET['krvrno'];
$upkarigar = mysqli_query($conn,"select *,date_format(krgdate,'%d-%m-%Y'),date_format(krdisdate,'%d-%m-%Y'),date_format(prodisdate,'%d-%m-%Y') from krissue where krvrno = $krvrno");
if(mysqli_num_rows($upkarigar) > 0)
{
    while($row = mysqli_fetch_assoc($upkarigar))
    {
        $karvrno = $row['krvrno'];
        $krnm = $row['krname'];
        $pronm = $row['proname'];
        $pweight = $row['proweight'];
        $prosize = $row['prosize'];
        $prodetail = $row['prodetail'];
        $krgdate = $row["date_format(krgdate,'%d-%m-%Y')"];
        $krgdisdt = $row["date_format(krdisdate,'%d-%m-%Y')"];
        $prodisdt = $row["date_format(prodisdate,'%d-%m-%Y')"];
        
    }
}
?>

<div id="main-content">
    <h1>Karigar Update</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="post-form">
        <div class="form-group">
            <label>krvrno</label>
            <input type="text" name="krvrno" value="<?php echo $karvrno; ?>" disabled>
            <input type="hidden" name="krvrno1" value="<?php echo $karvrno; ?>">

        </div>

        <div class="form-group">
            <label>Karigar Name</label>
            <input type="text" name="krnm" value="<?php echo $krnm; ?>">
        </div>

        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="pronm" value="<?php echo $pronm; ?>">
        </div>

        <div class="form-group">
            <label>Product Weight</label>
            <input type="text" name="pweight" value="<?php echo $pweight; ?>">
        </div>

        <div class="form-group">
            <label>Product Size</label>
            <input type="text" name="psize" value="<?php echo $prosize; ?>">
        </div>

        <div class="form-group">
            <label>Product Detail</label>
            <input type="text" name="pdetail" value="<?php echo $prodetail ; ?>">
        </div>

        <div class="form-group">
            <label>Karigar Given Date</label>
            <input type="text" name="krgdt" value="<?php echo $krgdate; ?>">
        </div>

        <div class="form-group">
            <label>Karigar dispetch Date</label>
            <input type="text" name="krdisdt" value="<?php echo $krgdisdt; ?>">
        </div>

        <div class="form-group">
            <label>Product Dispetch Date</label>
            <input type="text" name="pdisdt" value="<?php echo $prodisdt; ?>">
        </div>

        <input type="submit" class="submit" value="Update" name="update">
    </form>
</div>

<?php
$k_krvrno = $_POST['krvrno1'];
$k_knm = $_POST['krnm'];
$k_pronm = $_POST['pronm'];
$k_pweight = $_POST['pweight'];
$k_psize = $_POST['psize'];
$k_pdetail = $_POST['pdetail'];
$k_krgdt = $_POST['krgdt'];
$k_krdisdt = $_POST['krdisdt'];
$k_pdisdt = $_POST['pdisdt'];

if(isset($_POST['update']))
{
    $updatekarigar = mysqli_query($conn,"update krissue set krname = '$k_knm', proname = '$k_pronm', proweight = '$k_pweight', prosize = '$k_psize', prodetail = '$k_pdetail',krgdate = STR_TO_DATE('$k_krgdt', '%d-%m-%Y'), krdisdate = STR_TO_DATE('$k_krdisdt', '%d-%m-%Y'), prodisdate = STR_TO_DATE('$k_pdisdt', '%d-%m-%Y') where krvrno = $k_krvrno") or die("unsuccess to update");
    if($updatekarigar)
    {
        echo "success";  
    }
}
?>