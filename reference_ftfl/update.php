<?php
$ID = $_POST['ID'];
$referenceName = $_POST['referenceName'];
$Organization = $_POST['Organization'];
$Address  = $_POST['Address'];
$mobileNo = $_POST['mobileNo'];
$Relation = $_POST['Relation'];


$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");



$query = "UPDATE `ftfl_training`.`reference` SET `referenceName` = '".$referenceName."',

`Organization` = '".$Organization."',
`Address` = '".$Address."',
`mobileNo` ='".$mobileNo."',
`Relation` ='".$Relation."'

WHERE `reference`.`ID` = $ID;";


mysqli_query($link, $query);
//var_dump($query);
header('location:list.php');

?>