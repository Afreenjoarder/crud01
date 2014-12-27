
<?php



$presentAddress  = $_POST['presentAddress'];
$permanentAddress   = $_POST['permanentAddress'];
$District   = $_POST['District'];
$Mobile   = $_POST['Mobile'];
$Email = $_POST['Email'];


$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");



$query = "INSERT INTO `ftfl_db`.`contact_info` (



`Present_Address` ,
`Permanent_Address` ,
`District` ,
`Mobile` ,
`Email`

)
VALUES (
  '$presentAddress', '$permanentAddress', '$District', '$Mobile', '$Email');";

mysqli_query($link, $query);
echo $query;

header('location:list_contact.php');
?>
























