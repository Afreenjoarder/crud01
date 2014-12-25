<?php
$ID = $_POST['ID'];
$name = $_POST['name'];

$fatherName= $_POST['fatherName'];
$motherName = $_POST['motherName'];
$Religion  = $_POST['Religion'];
$Date_of_Birth   = $_POST['Date_of_Birth'];
//$Gender   = $_POST['Gender'];
//$Nationality = $_POST['Nationality'];
//$nationalID  = $_POST['nationalID'];//

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "ftfl_db");



$query = "UPDATE `ftfl_db`.`personal_info` SET `name` = '" .$name ."',`father_Name` = ' " .$fatherName ." ',`mother_Name` = ' " .$motherName . " ',`Religion` = ' " .$Religion . "',
`Date_of_Birth` = ' " .$Date_of_Birth . " ',

 WHERE `personal_info`.`ID` =$ID;";



mysqli_query($link, $query);
echo $query;
header('location:list.php');

?>