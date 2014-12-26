<?php


$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query = "SELECT * FROM `contact_info` WHERE `contact_info` . `ID`=$ID ";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
print_r($row);


?>
<a href="list_contact.php">Go to Home</a>


