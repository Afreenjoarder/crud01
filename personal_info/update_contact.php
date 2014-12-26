<?php
$ID = $_POST['ID'];
$presentAddress = $_POST['presentAddress'];
$permanentAddress= $_POST['permanentAddress'];
$District = $_POST['District'];
$Mobile = $_POST['Mobile'];
$Email   = $_POST['Email'];


$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");


//$query = "UPDATE `ftfl_db`.`contact_info` SET `Present_Address` = '" .$presentAddress ."',

//`Permanent_Address` = ' " .$permanentAddress ." ',
//`District` = ' " .$District . " ',
//`Mobile` = ' " .$Mobile . "',

//Email` = ' " .$Email . "'

// WHERE `contact_info`.`ID` =$ID;";

$query = "UPDATE `ftfl_db`.`contact_info` SET `Present_Address` = '" .$presentAddress ."',`Permanent_Address` = ' " .$permanentAddress ." ',`District` = ' " .$District . " ',`Mobile` = ' " .$Mobile . "',
`Email` = ' " .$Email . " '
 WHERE `contact_info`.`ID` =$ID;";




mysqli_query($link, $query);

header('location:list_contact.php');

?>