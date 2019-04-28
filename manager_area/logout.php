<?php


session_start();

session_destroy();

echo "<script>window.open('manager.php','_self')</script>";
?>