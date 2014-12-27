<?php

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "INSERT INTO `ftfl_training`.`empolyment_ftfl`(
`company_name`,
`company_business`,
`company_location`,
`position`,
`department`,

`duration`,
`responsibility`

)
VALUES (
'".$_POST['company_name']."','".$_POST['company_business']."',
'".$_POST['company_location']."','".$_POST['position']."','".$_POST['department']."',
'".$_POST['duration']."','".$_POST['responsibility']."')";



mysqli_query($link, $query);

header('location:list_employmentinfo.php');
