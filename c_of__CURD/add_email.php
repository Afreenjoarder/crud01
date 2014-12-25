<?php


$email  = $_POST['email'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "std_form");



$query =   "INSERT INTO `std_form`.`email` (

`id` ,
`email` ,
`created`
)
VALUES (
     '', '$email', NOW( )
);";




mysqli_query($link, $query);
echo $query;


header('location:list_email.php');

?>