<?php
$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query ="DELETE FROM `ftfl_db` . `personal_info` WHERE `personal_info` . `ID`=$ID";

mysqli_query($link, $query);

header('location:list.php');
?>