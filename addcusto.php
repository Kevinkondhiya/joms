<?php
include 'header.php';
include 'connection.php';
include 'session.php';
?>
<div id="main-content">
<h2 id="title">Add Customer</h2>

<!-- ===========================================   add form  ================================================= -->
<form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Add Customer</label>
            <input type="text" name="custonm" id="custonm" required/>
            
            <label style="margin-top: 20px;">Add Customer Number</label>
            <input type="text" name="custonum" id="custonum" required/>

            <label style="margin-top: 20px;">Add Customer City</label>
            <input type="text" name="custocity" id="custocity" required/>

        </div>
        <input class="submit" type="submit"  name="add" value="Add" />
        <!-- <input class="submit" type="submit" name="update" value="Update" /> -->

    </form>

<?php

$custonameins;
$custonum;
$custocity;
if(isset($_POST['add']))
{
    $custonameins = STRTOUPPER($_POST['custonm']);
    $custonum = $_POST['custonum'];
    $custocity = $_POST['custocity'];
    // =====================================   search for duplicate value  ================================    
    $srccustonm = mysqli_query($conn,"select upper(custonm) from custoname where custonm = '$custonameins'") or die("unsuccessfull to fetch custo name");
    if(mysqli_num_rows($srccustonm) > 0)
    {
        ?>
        <script> alert('Customer Name Already Exists'); </script> 
        <?php
        // echo "If part";
    } // =============== if  curly ======
    else
    {
        // echo "Else part";
        //  ==============================  insert karigar into table ===================================
       $inscustonm = mysqli_query($conn,"insert into custoname(custonm,custonum,custocity) values(upper('$custonameins'),$custonum,'$custocity');");   
       if($inscustonm)
{
    // echo "success";
?>
      <script>
        window.location.href = '<?php echo $url; ?>/addcusto.php';
    </script>
 <?php       
}         
    }
    ?>
<?php
}  // ===================  if(isset($_POST['add']))   =====================


?>

<?php


//  ======================  select karigar name to update  ====================
    $custosrc = mysqli_query($conn,"select * from  custoname") or die("couold not connect custoname");
?>
<h2 id="title">Update Customer</h2>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        
        <div class="form-group">
        <label></label>
            <!-- ===============================  dropdown to select krname for update    ============================ -->
            <select name="srcustonm">
                <option value="select">Select</option>
        <?php
        if(mysqli_num_rows($custosrc) > 0)
        {
            while($row2 = mysqli_fetch_assoc($custosrc))
            {
                // $krnm = $row2['krname'];
                // $krnumber = $row2['krnumber'];
                ?>
                        <option> <?php echo $row2['custonm']; ?> </option>
                <?php
            }
        }
        ?>
        </select>
    </div>
        <input type="submit" name="srcnm" value="search" class="submit">
    </form>

<?php
$custonm2;
if(isset($_POST['srcnm']))
{
    $custonm2 = $_POST['srcustonm'];
    // echo $krnm2;
    $srcusto2 = mysqli_query($conn,"select * from custoname where custonm = '$custonm2'") or die("Can't fetch according to dropdown");
    if(mysqli_num_rows($srcusto2) > 0)
    {
        while($row3 = mysqli_fetch_assoc($srcusto2))
        {
            $custoid = $row3['id'];
            $custoname = $row3['custonm'];
            $custonumber = $row3['custonum'];
            $custocity2 = $row3['custocity'];


        }
    }
            ?>
            <!-- =============================== end of dropdown to select krname  ============================ -->
            <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $custoid;?>">
            <label>Customer Name</label>
            <input type="text" name="adcusto" id="adcusto" value="<?php echo $custoname; ?>" required/>
            
            <label style="margin-top: 20px;"> Customer Number</label>
            <input type="number" name="adcustono" id="adcustono" value="<?php echo $custonumber; ?>" required/>

            <label style="margin-top: 20px;"> Customer City</label>
            <input type="text" name="adcustocity" id="adcustocity" value="<?php echo $custocity2; ?>" required/>

        </div>
        <input class="submit" type="submit" name="update" value="Update" />
        <?php    
} //  if isset brecket
?>
    </form>
<!-- =========================================  update query  =========================== -->
<?php
$up_id;
$up_custonm;
$up_custonum;
$up_custocity;

if(isset($_POST['update']))
{
    $up_id = $_POST['id'];
$up_custonm = $_POST['adcusto'];
$up_custonum = $_POST['adcustono'];
$up_custocity = $_POST['adcustocity'];
    // echo $up_id. "  ".$up_krnm."  ".$up_krnumber;
$up_id = $_POST['id'];
   $upcusto = mysqli_query($conn,"update custoname set custonm = '$up_custonm',custonum = $up_custonum,custocity = '$up_custocity' where id = $up_id") or die("unsuccess to update");
   if($upcusto)
   {
    ?>
    <script>
        window.location.href = "<?php echo $url; ?>addcusto.php";
    </script>
    <?php
   }
}
?>
    </div>
  </body>
</html>