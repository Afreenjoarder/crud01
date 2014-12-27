<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "std_form");

$query ="DELETE FROM `std_form` . `email` WHERE `email` . `id`=$id";

mysqli_query($link, $query);

header('location:list_email.php');
?>
