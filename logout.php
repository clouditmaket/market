<?php
session_start();
$_SESSION['logged'] = "0";
session_destroy();
echo "<script>window.open('index.php','_self')</script>";

?>