<?php
include 'header.php';
include 'connection.php';
include 'session.php';
?>
<div id="main-content">
    <h2>Edit Record</h2>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Order vrno</label>
            <select name="orvrno">
                <option>select</option>
            <?php
            $srcorvrno = mysqli_query($conn,"select * from orderpro where status !='complete'");
            if(mysqli_num_rows($srcorvrno))
            {
                while($row = mysqli_fetch_assoc($srcorvrno))
                {
            ?>
            <option> <?php echo $row['vrno']; ?> </option>
            <?php
                }
            }
            ?>
            </select>
            <!-- <input type="text" name="orvrno" /> -->
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
<?php 
$o_vrno;
if(isset($_POST['showbtn']))
{
$o_vrno = $_POST['orvrno'];
$select = "SELECT *,date_format(orderdt, '%d-%m-%Y'),date_format(disdate, '%d-%m-%Y') FROM orderpro WHERE vrno = $o_vrno";
$result = mysqli_query($conn,$select) or die("we can not connect");
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {

?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="orvrno"  value="<?php echo $row['vrno']; ?>" />
            <input type="text" name="partyname" value="<?php echo $row['partyname']; ?>" />
        </div>
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="proname" value="<?php echo $row['proname']; ?>" />
        </div>
        <div class="form-group">
            <label>Weight</label>
            <input type="text" name="pweight" value="<?php echo $row['pweight']; ?>" />
        </div>
        <div class="form-group">
            <label>Size</label>
            <input type="text" name="psize" value="<?php echo $row['psize']; ?>" />
        </div>
        <div class="form-group">
            <label>Product Details</label>
            <input type="text" name="prodetail" value="<?php echo $row['prodetail']; ?>" />
        </div>
        <div class="form-group">
            <label>Order no.</label>
            <input type="text" name="orno" value="<?php echo $row['orderno']; ?>" />
        </div>
        <div class="form-group">
            <label>Ordre Date</label>
            <input type="text" name="ordt" value="<?php echo $row["date_format(orderdt, '%d-%m-%Y')"]; ?>" />
        </div>
        <div class="form-group">
            <label>Dispetch Date</label>
            <input type="text" name="disdt" value="<?php echo $row["date_format(disdate, '%d-%m-%Y')"]; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php  
}
    }
        }
?>
</div>
</div>
</body>
</html>
