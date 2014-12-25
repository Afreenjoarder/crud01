<?php


$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "std_form");

$query = "SELECT * FROM `Form` WHERE `Form` . `ID`=$ID ";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
print_r($row);


?>
<a href="list.php">Go to Home</a>


