<?php
$server="localhost";
$user="root";
$pass= "";
$db="ispin_reports";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error)
	die("connection problem");

?>