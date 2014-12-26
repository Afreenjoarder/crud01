<?php
$ID = $_POST['ID'];
$level_of_education   = $_POST['level_of_education'];
$examTitle   = $_POST['examTitle'];
$group_sub  = $_POST['group_sub'];
$Institution   = $_POST['Institution'];
$Resulttype = $_POST['Resulttype'];

$Result   = $_POST['Result'];
$Scale = $_POST['Scale'];
$passingYear   = $_POST['passingYear'];
$Duration = $_POST['Duration'];
$Achievement =$_POST['Achievement'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query ="UPDATE `ftfl_db`.`Academic` SET
`Level_of_education` = '$level_of_education',
`Exam_title` = '$examTitle',
`Group_sub` = '$group_sub',
`Institution` = '$Institution',
`Resulttype` = '$Resulttype',
`Result` = '$Result',
`Scale` = '$Scale',
`Passing_year` = '$passingYear',
`Duration` = '$Duration',
`Achievement` = '$Achievement'  WHERE `Academic`.`ID` =ID;";

mysqli_query($link, $query);
echo $query;
header('location: list_ac.php');

?>