<?php


session_start();

session_destroy();

echo "<script>window.open('staff.php','_self')</script>";
?>