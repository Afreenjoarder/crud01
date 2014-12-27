<?php
$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query ="DELETE FROM `ftfl_db` . `Academic` WHERE `Academic` . `ID`=$ID";

mysqli_query($link, $query);

header('location:list_ac.php');
?>
