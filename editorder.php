<?php
include 'header.php';
include 'connection.php';
include 'session.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $or_vrno = $_GET['vrno'];
    if($or_vrno != "")
    {
        $slstrec =mysqli_query($conn,"SELECT krissue.ovrno,krissue.status,orderpro.vrno FROM krissue LEFT JOIN orderpro ON orderpro.vrno=krissue.ovrno 
        AND krissue.status = 'recive' where orderpro.vrno=$or_vrno");
        if(mysqli_num_rows($slstrec) > 0)
        {
            $result = mysqli_query($conn,"SELECT *,DATE_FORMAT(orderdt, '%d-%m-%Y'),DATE_FORMAT(disdate, '%d-%m-%Y') FROM orderpro where vrno = '$or_vrno'") or die("Query Unsucssful.........");
        
            if(mysqli_num_rows($result) > 0)
            {
            ?>
            <table cellpadding="7px">
                <thead>
                <th>Vr no.</th>
                <th>Party Name</th>
                <th>Pro Name</th>
                <th>Weight</th>
                <th>Size</th>
                <th>Pro Detail</th>
                <th>Order No.</th>
                <th>Order date</th>
                <th>Dis Date</th>
                <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['vrno']; ?></td>
                        <td><?php echo $row['partyname']; ?></td>
                        <td><?php echo $row['proname']; ?></td>
                        <td><?php echo $row['pweight']; ?></td>
                        <td><?php echo $row['psize']; ?></td>
                        <td><?php echo $row['prodetail']; ?></td>
                        <td><?php echo $row['orderno']; ?></td>
                        <td><?php echo $row["DATE_FORMAT(orderdt, '%d-%m-%Y')"]; ?></td>
                        <td><?php echo date('d-m-Y'); ?></td>
        
                        <td>
                            <a href="editorder.php?vvrno=<?php echo $row['vrno']; ?>">complete</a>
                        </td>
                    </tr>
                    <?php } // lose of while loop ?>
                </tbody>
            </table>
            <?php 
            } // if curly breces over 
                else
                {
                    echo "<h2> No Record Found</h2>";
                } 
        }
        else
        {
        ?>
        <script>
        alert("Order is not received from karigar");
        window.location.href = '<?php echo $url; ?>allorder.php';
        </script>
        <?php
        } //  =======================    else brecket
    }
    $vvrno = $_GET['vvrno'];
if (isset($_GET['vvrno']) || ($_GET['vvrno'] != "")) {

    $disdate = date('d-m-Y');
    $complete = "update orderpro set status = 'complete',disdate = STR_TO_DATE('$disdate','%d-%m-%Y') where vrno = $vvrno";
    $rescomplete = mysqli_query($conn,$complete) or die("unsuccess to complete");
    if($rescomplete)
    {
        ?>
        <script>
        window.location.href = '<?php echo $url; ?>allorder.php';
        </script>
        <?php
    } 
}
else
{
    ?>
    <script>
        // alert('unsuccessful');
    </script>
    <?php
}
    ?> 
</div>
</div>
</body>
</html>