<?php

$id = $_POST['id'];
$cname = $_POST['company_name'];
$cbusiness= $_POST['company_business'];
$clocation =$_POST['company_location'];
$position =$_POST['position'];
$dep = $_POST['department'];
$from = $_POST['from'];
$to= $_POST['to'];
$duration = $_POST['duration'];
$res = $_POST['responsibility'];





$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "UPDATE `ftfl_training`.`empolyment_ftfl` SET `company_name` = '".$cname."' ,`company_business` = '".$cbusiness."',
`company_location` = '".$clocation."',`position` = '".$position."',
`department` = '".$dep."',
`duration` = '".$duration."',`responsibility` = '".$res."'  WHERE `empolyment_ftfl`.`id` = $id;";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_employmentinfo.php');