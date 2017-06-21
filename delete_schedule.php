<?php
	include('connections/connect.php');
$id=$_GET['delid'];
mysql_query("delete from timetable where table_id='$id'") or die(mysql_error());
header('location:set_schedules.php');
?>