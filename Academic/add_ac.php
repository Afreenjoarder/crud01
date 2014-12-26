<?php

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


$query ="INSERT INTO `ftfl_db`.`Academic` (

`Level_of_education` ,
`Exam_title` ,
`Group_sub` ,
`Institution` ,
`Resulttype` ,
`Result` ,
`Scale` ,
`Passing_year` ,
`Duration` ,
`Achievement`
)
VALUES (
     '$level_of_education', '$examTitle', '$group_sub', '$Institution', '$Resulttype', '$Result', '$Scale', '$passingYear', '$Duration', '$Achievement4'
);";

mysqli_query($link, $query);

echo $query;
header('location:list_ac.php');
?>
