<?php
include 'connection.php';
include 'header.php';
include 'session.php';
?>
<!-- =============  button stylesheet  ==================== -->
<link href="p-btn.css" rel="stylesheet">
<div id="main-content">
    <h1 id="title"> Karigar Issude Order </h1>
        <table cellpadding="7px">
            <thead>
            <th>Kr Vr no.</th>
            <th>Or Vr no.</th>
            <th>Kr Name</th>
            <th>Pro Name</th>
            <th>Weight</th>
            <th>Size</th>
            <th>Pro detail</th>
            <th>kr given date</th>
            <th>Or dis Date</th>
            <th>Action</th>
        </thead>
            <tbody>
                <?php
                    $select ="SELECT *,DATE_FORMAT(krgdate, '%d-%m-%Y'),DATE_FORMAT(prodisdate, '%d-%m-%Y') FROM krissue where status = 'pending' ORDER BY krvrno";
                    $result = mysqli_query($conn,$select) or die("Query Unsucssful.........");
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                ?>
                <tr>
                    <td><?php echo $row['krvrno'] ?></td>
                    <td><?php echo $row['ovrno'] ?></td>
                    <td><?php echo $row['krname'] ?></td>
                    <td><?php echo $row['proname'] ?></td>
                    <td><?php echo $row['proweight'] ?></td>
                    <td><?php echo $row['prosize'] ?></td>
                    <td><?php echo $row['prodetail'] ?></td>
                    <td><?php echo $row["DATE_FORMAT(krgdate, '%d-%m-%Y')"] ?></td>
                    <td><?php echo $row["DATE_FORMAT(prodisdate, '%d-%m-%Y')"] ?></td>
                    <td> <a href="upkr.php?krvrno=<?php echo $row['krvrno'] ?>"> E </a> 
                        <a href="deletekr.php?krvrno=<?php echo $row['krvrno']; ?>"> D </a></td>

                </tr>
                <?php
                        } // lose of while loop
                    } // if curly breces over 
                    else
                    {
                        echo "<tr><td colspan='9'><h3 id='title' style='color: red; font-weight:bold;'> No Record Found</h3></td></tr>";
                    }
                    ?>
            </tbody>
        </table>
</div> 