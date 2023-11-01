<?php

session_start();

session_destroy();

echo "<script>window.open('dashboard.php','_self')</script>";

?>