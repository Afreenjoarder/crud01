<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "DELETE FROM `ftfl_training`.`empolyment_ftfl` WHERE `empolyment_ftfl`.`id` = $id";

mysqli_query($link, $query);

header('location:list_employmentinfo.php');
?>
