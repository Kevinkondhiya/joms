<?php
include 'connection.php';
include 'session.php';
$d_krvrno = $_GET['krvrno'];
// echo $d_krvrno;
$selkr = mysqli_query($conn,"select * from krissue where krvrno = $d_krvrno") or die("cant cfind record");
    if(mysqli_num_rows($selkr) > 0)
    {
        while($row = mysqli_fetch_assoc($selkr))
        {
            $orderno = $row['ovrno'];
        }
            $up_order = mysqli_query($conn,"update orderpro set status ='pending' where vrno = $orderno") or die("Can't update orderpro");
        if($up_order)
        {
                $deletkr = mysqli_query($conn,"delete from krissue where krvrno = $d_krvrno") or die("cant delete from karigar");
                if($deletkr)
                {
                ?>
                 <script>
                        window.location.href="<?php echo $url; ?>krreport.php";
                    </script>
                <?php
                }
        }
    }
?>