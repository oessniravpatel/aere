<?php
ob_start();
session_start();
unset($_SESSION);
session_destroy();
header("location: allcourses.php");
?>