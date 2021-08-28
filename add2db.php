<?php
include_once 'connect.php';

$STUNAME = $_POST["stu_name"];
$FNAME = $_POST["father_name"];
$GENDER = $_POST["gender"];
$DOB = $_POST["dob"];
$COMM = $_POST["comm-check"];
$COMMOTHERS = $_POST["comm-other"];


$sql = "INSERT INTO `ug_form`(`name`, `fathers_name`, `gender`, `date_of_birth`, `community`, `first_graduate`, `email_id`, `mobile_no_whats`, `mobile_no`, `school_name`, `hsc_group`, `mark_in_11`, `12_passed_out_yr`, `reg_no_12`, `mark_in_12`, `maths_mark_12`, `phy_mark_12`, `chem_mark_12`, `bio_cs_mark_12`, `pref_1`, `pref_2`, `pref_3`, `tenth_mark`, `aadhar_no`, `house_no`, `street_name`, `city`,`district`, `state`, `pincode`) 
        VALUES ('".$STUNAME."', '".$FNAME."', '".$GENDER."', '".$DOB."', '".$commu."', '".$FG."', '".$EMAILID ."', '".$WHATSAPPNO."', '".$MOBILENO."', '".$SCHOOLNAME."', '".$GRP."', '".$ELEVENMARK."', '".$TWELETHPASSEDYEAR."', '".$REGNO."', '".$TWELETHMARK."', '".$MATHSMARK."', '".$PHYMARK."', '".$CHEMARK."', '".$BIORCSMARK."', '".$DEPTPREF1."', '".$DEPTPREF2."', '".$DEPTPREF3."', '".$TENTHNMARK."', '".$aadhar_no."','".$house_no."','".$street_nm."','".$town_nm."','".$district_nm."','".$state_nm."','".$pin_cd."')";



if ($conn->query($sql) === TRUE) {
    
}

?>