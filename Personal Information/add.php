<?php


$name = $_POST['name'];

$fatherName= $_POST['fatherName'];
$motherName = $_POST['motherName'];
$Religion  = $_POST['Religion'];
/*$Date_of_Birth   = $_POST['Date_of_Birth'];
$Gender   = $_POST['Gender'];
$Nationality = $_POST['Nationality'];
$nationalID  = $_POST['nationalID'];*****///

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "ftfl_db");



$query = "INSERT INTO `ftfl_db`.`personal_info` (`ID` ,


`name`
`father_Name` ,

`mother_Name` ,

`Religion` ,

`Date_of_Birth` ,
/*
`Gender` ,
`Nationality` ,
`National_ID`**/
)VALUES (

'', '$name''$fatherName', '$motherName','$Religion','$Date_of_Birth',);";


mysqli_query($link, $query);
echo $query;



header('location:list.php');
?>