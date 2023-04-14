<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['username'])) {
    ?>
    <script>
    window.location.href = '<?php echo $url; ?>login.php';
    </script>
    <?php
}
?>