<?php
$referenceName = $_POST['referenceName'];
$Organization  = $_POST['Organization'];
$Address  = $_POST['Address'];
$mobileNo = $_POST['mobileNo'];
$Relation = $_POST['Relation'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "INSERT INTO `ftfl_training`.`reference` (

`referenceName` ,
`Organization` ,
`Address` ,
`mobileNo` ,
`Relation`
)
VALUES (
 '$referenceName', '$Organization', '$Address', '$mobileNo', '$Relation'
);";

mysqli_query($link, $query);
//echo $query;

header('location:list.php');
