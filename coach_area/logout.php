<?php


session_start();

session_destroy();

echo "<script>window.open('coach.php','_self')</script>";
?>