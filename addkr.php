<?php
include 'header.php';
include 'connection.php';
include 'session.php';
?>
<div id="main-content">
<h2 id="title">Add Karigar</h2>

<!-- ===========================================   add form  ================================================= -->
<form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Add Karigar</label>
            <input type="text" name="adkr" id="adkr" required/>
            
            <label style="margin-top: 20px;">Add Karigar Number</label>
            <input type="text" name="adkrno" id="adkrno" required/>

        </div>
        <input class="submit" type="submit"  name="add" value="Add" />
        <!-- <input class="submit" type="submit" name="update" value="Update" /> -->

    </form>

<?php
if(isset($_POST['add']))
{
    $krnameins = STRTOUPPER($_POST['adkr']);
    $krnumber = $_POST['adkrno'];
}
if(isset($_POST['add']))
{
    // =====================================   search for duplicate value  ================================    
    $srckrname = mysqli_query($conn,"select upper(krname) from karigarname where krname = '$krnameins'") or die("unsuccessfull to fetch karigar name");
    if(mysqli_num_rows($srckrname) > 0)
    {
        ?>
        <script> alert('Karigar Name Already Exists'); </script> 
        <?php
        // echo "If part";
    } // =============== if  curly ======
    else
    {
        // echo "Else part";
        //  ==============================  insert karigar into table ===================================
       $inskenm = mysqli_query($conn,"insert into karigarname(krname,krnumber) values(upper('$krnameins'),$krnumber);");
       if($inskenm)
{
?>
      <script>
        window.location.href = '<?php echo $url; ?>addkr.php';

    </script>
 <?php       
}    
    }
    ?>
<?php
}  // ===================  if(isset($_POST['add']))   =====================




//  ======================  select karigar name to update  ====================
    $krsrc = mysqli_query($conn,"select * from  karigarname") or die("couold not connect karigar");
?>
<h2 id="title">Update Karigar</h2>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        
        <div class="form-group">
        <label></label>
            <!-- ===============================  dropdown to select krname for update    ============================ -->
            <select name="srkrnm">
                <option value="select">Select</option>
        <?php
        if(mysqli_num_rows($krsrc) > 0)
        {
            while($row2 = mysqli_fetch_assoc($krsrc))
            {
                // $krnm = $row2['krname'];
                // $krnumber = $row2['krnumber'];
                ?>
                        <option> <?php echo $row2['krname']; ?> </option>
                <?php
            }
        }
        ?>
        </select>
    </div>
        <input type="submit" name="srcnm" value="search" class="submit">
    </form>

<?php
if(isset($_POST['srcnm']))
{
    $krnm2 = $_POST['srkrnm'];
    // echo $krnm2;
    $srkrc2 = mysqli_query($conn,"select * from karigarname where krname = '$krnm2'") or die("Can't fetch according to dropdown");
    if(mysqli_num_rows($srkrc2) > 0)
    {
        while($row3 = mysqli_fetch_assoc($srkrc2))
        {
            $krid = $row3['id'];
            $karigarname = $row3['krname'];
            $karigarnumber = $row3['krnumber'];

        }
    }
            ?>
            <!-- =============================== end of dropdown to select krname  ============================ -->
            <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $krid;?>">
            <label>Karigar Name</label>
            <input type="text" name="adkrnm" id="adkr" value="<?php echo $karigarname; ?>" required/>
            
            <label style="margin-top: 20px;"> Karigar Number</label>
            <input type="number" name="adkrno" id="adkrno" value="<?php echo $karigarnumber; ?>" required/>

        </div>
        <input class="submit" type="submit" name="update" value="Update" />
        <?php    
} //  if isset brecket
?>
    </form>
<!-- =========================================  update query  =========================== -->
<?php
if(isset($_POST['update']))
{
$up_id = $_POST['id'];
$up_krnm = $_POST['adkrnm'];
$up_krnumber = $_POST['adkrno'];
    // echo $up_id. "  ".$up_krnm."  ".$up_krnumber;
   $upkr = mysqli_query($conn,"update karigarname set krname = '$up_krnm',krnumber = $up_krnumber where id = $up_id") or die("unsuccess to update");
   if($upkr)
   {
    ?>
    <script>
        window.location.href = "<?php echo $url; ?>addkr.php";
    </script>
    <?php
   }
}
?>
    </div>
  </body>
</html>