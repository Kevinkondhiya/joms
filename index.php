<?php 
include 'header.php';
include 'session.php';

?>
<?php
function select($sel,$rowdet)
{
    include 'connection.php';
    $sel;
    $seltor = mysqli_query($conn,$sel) or die("can't fetch total records");
    while($row = mysqli_fetch_assoc($seltor))
    {
        $seldt = $row["$rowdet"];
    }
    echo $seldt;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<style>
#seldet
{
    color: rgb(230,126,34);
    font-weight: bold;
    font-size: x-large;
}

.card-body
{
    box-shadow: 0px 0px 10px black;
}

/* .card-body:hover #seldet
{

    color: rgb(230,126,34);
    font-weight: bold;
    font-size: xx-large;
}
.card-body:hover .card-title
{
    font-size: x-large; 
}

.card-body:hover .card-text
{
    font-size: large;
}*/

.card-body1:hover
{
    box-shadow: -5px 5px 15px black;
}
.card-body2:hover
{
    box-shadow: 0px 5px 20px black;
}

.card-body3:hover
{
    box-shadow: 5px 5px 15px black;
}
.card-title
{
    font-weight: bold;
    letter-spacing: 1px;
}
</style>
<!-- ==================   image card  ======================== -->

<!-- =====================   1 row  ============================= -->

<!-- ==========================  Total Order  ====================== -->

<div style="display: flex; justify-content: center; margin-top: 3rem;">
    <div class="card" style="width: 25rem; margin-right: 5rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body1">
            <h5 class="card-title">Total Order</h5>
            <p class="card-text">Total Order You Had Added In The System.</p>
            <p class="card-text" id="seldet"> 

            <?php
            //  ==============  select function  ================
             select("select count(*) from orderpro","count(*)") 
             ?>
            </p>
            <a href="allorder.php" class="btn btn-primary">see more</a>
        </div>
    </div>
<!-- ==========================  End Total Order  ====================== -->

<!-- ==========================  Pending Order  ====================== -->

    <div class="card" style="width: 25rem; margin-right: 5rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body2">
            <h5 class="card-title">Pending Orders</h5>
            <p class="card-text">Order Which Are Not Delivered To Customer.</p>
            <p class="card-text" id="seldet"> 
                <?php
                    select("select count(*) from orderpro where status != 'complete'","count(*)") 
                ?>
            </p>
            <a href="pendingorder.php" class="btn btn-primary">see more</a>
        </div>
    </div>
<!-- ==========================  End Pending Order  ====================== -->

<!-- ==========================  Completed Orders  ====================== -->

    <div class="card" style="width: 25rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body3">
            <h5 class="card-title">Completed Orders</h5>
            <p class="card-text">Order Which Are Delivered To Customer.</p>
            <p class="card-text" id="seldet">
            <?php
                select("select count(*) from orderpro where status = 'complete'","count(*)")
            ?>
            </p>
            <a href="index.php" class="btn btn-primary">see more</a>
        </div>
    </div>
    <!-- ==========================  End Pending Order  ====================== -->
</div>

<!-- =====================   1 row end  ============================= -->


<!-- =====================   2 row  ============================= -->


<div style="display: flex; justify-content: center; margin-top: 3rem;">
    <!-- ==========================  Total Karigar Activities  ====================== -->
    <div class="card" style="width: 25rem; margin-right: 5rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body1">
            <h5 class="card-title">Total Karigar Activities</h5>
            <p class="card-text">Number Of Total Karigar Activities Like Karigar Issued and Karigar Recived in System.</p>
            <p class="card-text" id="seldet">
            <?php select("select count(*) from krissue","count(*)") ?>
            </p>
            <a href="kractivities.php" class="btn btn-primary">see more</a>
        </div>
    </div>
    <!-- ==========================  End Total Karigar Activities  ====================== -->

    <!-- ==========================  Karigar Issued Orders  ====================== -->
    <div class="card" style="width: 25rem; margin-right: 5rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body2">
            <h5 class="card-title">Karigar Issued Orders</h5>
            <p class="card-text">Out Of Total Karigar Activities Orders Which Are Pennding From Karigar Till Date.</p>
            <p class="card-text" id="seldet">
            <?php select("select count(*) from krissue where status = 'pending'","count(*)") ?>
            </p>
            <a href="krorisu.php" class="btn btn-primary">see more</a>
        </div>
    </div>
    <!-- ==========================  End Karigar Issued Orders  ====================== -->

    <!-- ==========================  Karigar Issued Orders  ====================== -->
    <div class="card" style="width: 25rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body3">
            <h5 class="card-title">Karigar Received Orders</h5>
            <p class="card-text">Orders Which Are Received From Karigar Till Date.</p>
            <p class="card-text" id="seldet">
            <?php select("select count(*) from krissue where status = 'recive'","count(*)"); ?>
            </p>
            <a href="krorrec.php" class="btn btn-primary">see more</a>
        </div>
    </div>
    <!-- ==========================  End Karigar Issued Orders  ====================== -->

</div>

<!-- =====================   2 row end  ============================= -->

<!-- =====================   3 row  ============================= -->

<div style="display: flex; justify-content: center; margin-top: 3rem;">

    <!-- ==========================  Total Pending Order  ====================== -->

    <div class="card" style="width: 25rem; margin-right: 5rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body1">
            <h5 class="card-title">Pending Karigar Receive</h5>
            <p class="card-text">The order which are not received from the karigar of todays or previous date.</p>
            <p class="card-text" id="seldet">
            <?php $todaydt = date('Y-m-d'); ?>
            <?php select("select count(*) from krissue where krdisdate <= STR_TO_DATE('$todaydt','%Y-%m-%d') and status = 'pending'","count(*)"); ?>
            </p>
            <a href="krrectilldt.php" class="btn btn-primary">see more</a>
        </div>
    </div>
    <!-- ==========================  End Total Pending Order  ====================== -->

    <!-- ==========================  Pending Karigar Issue  ====================== -->
    <div class="card" style="width: 25rem; margin-right: 5rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body2">
            <h5 class="card-title">Pending Karigar Issue</h5>
            <p class="card-text">Orders Which Are Pending To Issue Karigar.</p>
            <p class="card-text" id="seldet">
            <?php select("select count(*) from orderpro where status = 'pending'","count(*)"); ?>
            </p>
            <a href="pendingkrissue.php" class="btn btn-primary">see more</a>
        </div>
    </div>
    <!-- ==========================  End Pending Karigar Issue  ====================== -->

    <!-- ==========================  Pending Complete Orders  ====================== -->

    <div class="card" style="width: 25rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body card-body3">
            <h5 class="card-title">Pending Complete Orders</h5>
            <p class="card-text">Out Of Total Pending Orders. Orders Which Are Received From Karigar But Not Delivered To Customer.</p>
            <p class="card-text" id="seldet">
            <?php select("select count(*) from orderpro INNER JOIN krissue ON krissue.ovrno = orderpro.vrno where krissue.status = 'recive' AND orderpro.status != 'complete' AND orderpro.status != 'pending';","count(*)"); ?>
            </p>
            <a href="pendingcompleteorder.php" class="btn btn-primary">see more</a>
        </div>
    </div>
    <!-- ==========================  End Pending Complete Orders  ====================== -->

</div>

<!-- =====================   3 row end  ============================= -->

</body>
</html>