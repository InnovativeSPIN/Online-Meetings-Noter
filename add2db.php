<?php
include_once 'connect.php';

$DATE = $_POST["fdate"];
$TIME = $_POST["ftime"];
$FDAY = $_POST["fday"];
$TITLE = $_POST["title"];
$MeetPlatform = $_POST["link"];
$organizedBy = $_POST["organizers"];
$AGENDA = $_POST["desc"];
$WORK_PLANNED = $_POST["work_plan"];
$prev_works = $_POST["work_plan_prev"];
$prev_works_done_by = $_POST["prev_work_done"];



$sql = "INSERT INTO `ispin`(`date`, `time`, `day`, `meet_title`, `meet_agenda`, `meet_platform`, `meet_organized`, `work_planned`, `work_complected`,`work_complected_by`) 
        VALUES ('".$DATE."', '".$TIME."', '".$FDAY."', '".$TITLE."', '".$AGENDA."', '".$MeetPlatform."', '".$organizedBy ."', '".$WORK_PLANNED."', '".$prev_works."', '".$prev_works_done_by."')";



if ($conn->query($sql) === TRUE) {
    
}

?>