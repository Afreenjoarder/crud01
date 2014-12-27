<?php



$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "SELECT * FROM    `reference` WHERE `reference` . `ID`=$ID ";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
print_r($row);


?>
<a href="list.php">Go to Home</a>

