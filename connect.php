<?php
$server="localhost";
$user="";
$pass= 
$db="iSPIN_Reports";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error)
	die("connection problem");

?>