<?php
$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query ="DELETE FROM `ftfl_training` . `training_skills` WHERE `training_skills` . `ID`=$ID";

mysqli_query($link, $query);

header('location:list.php');
?>
