<?php


$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query = "SELECT * FROM `Academic` WHERE `Academic` . `ID`=$ID ";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
print_r($row);


?>
<a href="list_ac.php">Go to Home</a>

