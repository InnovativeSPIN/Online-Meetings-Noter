<?php
$server="localhost";
$user="";
$pass= 
$db="nscet_NewAadmissionDetails";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error)
	die("connection problem");

?>