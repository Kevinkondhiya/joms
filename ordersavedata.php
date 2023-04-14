<?php
$m_prno = $_POST['vrno'];
echo $m_prno;
$m_ptname = $_POST['partyname'];
$m_proname = $_POST['proname'];
$m_weight = $_POST['weight'];
$m_size = $_POST['size'];
$m_prodetail = $_POST['prodetail'];
$m_ono = $_POST['orderno'];
$m_odate = $_POST['odate'];
$m_ddate = $_POST['ddate'];

include 'connection.php';
//$insert = "insert into orderpro(vrno,partyname,proname,pweight,psize,prodetail,orderno,orderdt,disdate) values(4,'pbdhari','mle','55.00','213','mle',2,'10-06-2022','20-06-2022')";

$insert = "insert into orderpro(vrno) values($m_prno)";
echo $insert;
echo "<br>$m_prno";
echo "<br>$m_prno $m_ptname $m_proname $m_weight $m_size $m_prodetail $m_ono $m_odate $m_ddate";

$result = mysqli_query($conn,$insert) or die("rercord does not inserted successfully");
if($result)
{
    header('Location:http://knkk.unaux.com/madhuvankr');
}
mysqli_close($conn);
?>