<?php
include 'connection.php';
include 'session.php';

$proname;
$psize;
$pweight;
$prodetail;
if (isset($_POST['save-data'])) {
    {
        $k_inputvr = $_POST['inputvr'];

        $k_vrsearch ="select * from orderpro where vrno = $k_inputvr";
        $k_vrsrcresult = mysqli_query($conn,$k_vrsearch) or die("could not find record");
        if($mysqli_num_rows < 0 )
        {
            while ($row = $mysqli_fetch_assoc) {
                $proname = $row['proname'];
                $psize = $row['psize'];
                $pweight = $row['pweight'];
                $prodetail = $row['prodetail'];

            }
        }
    }
}
$k_krvrno = $_POST['krvrno'];
$k_ovrno = $_POST['ovrno'];
$k_kname = $_POST['kname'];
$k_proname = $_POST['proname'];
$k_prosize = $_POST['prosize'];
$k_proweight = $_POST['proweight'];
$k_prodetail = $_POST['prodetail'];
$k_krgidate = $_POST['krgidate'];
$k_krdisdate = $_POST['krdisdate'];
$k_prodisdate = $_POST['prodisdate'];

$krinsert = "insert into krissue(krvrno,ovrno,krname,proname,prosize,proweight,prodetail,krgdate,krdisdate,prodisdate) values($k_krvrno,$k_ovrno,'$k_kname','$k_proname','$k_prosize','$k_proweight','$k_prodetail','$k_krgidate','$k_krdisdate','$k_prodisdate')";

$krresult = mysqli_query($conn,$krinsert) or die("karigar can't be added");

if($krresult)
{
    header('Location:http://localhost:8081/madhuvankr');
}
mysqli_close($conn);
?>