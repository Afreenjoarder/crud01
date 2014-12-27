<?php

$level_of_education   = $_POST['level_of_education'];
$examTitle   = $_POST['examTitle'];
$group_sub  = $_POST['group_sub'];
$Institution   = $_POST['institution'];
$Resulttype = $_POST['result_type'];

$Result   = $_POST['result'];
$Scale = $_POST['scale'];
$passingYear   = $_POST['passingYear'];
$Duration = $_POST['duration'];
$Achievement =$_POST['achievement'];

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
