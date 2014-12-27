<?php

$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "std_form");

$query = "SELECT * FROM `email` WHERE `email` . `id`=$id ";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
print_r($row);


?>
<a href="list_email.php">Go to Home</a>
