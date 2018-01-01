<?php 
include 'connect.php';
$delete =$_GET['CourseID'];


//$delete ="DELETE FROM `tblcourse` WHERE CourseID='$delete'";
//$result =mysql_query($delete);
header("location:view_Course.php");


?>