<?php 
include 'connection.php';
session_start();
if(isset($_GET['logout']))
{
	session_destroy();
    header("location:".$url."login.php");
}
?>