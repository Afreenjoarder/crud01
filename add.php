<?php


$name = $_POST['name'];
$fatherName= $_POST['fatherName'];
$motherName = $_POST['motherName'];
$Religion  = $_POST['Religion'];
$Date_of_Birth   = $_POST['Date_of_Birth'];
$Gender   = $_POST['Gender'];
$Nationality = $_POST['Nationality'];
$nationalID  = $_POST['nationalID'];
$presentAddress  = $_POST['presentAddress'];
$permanentAddress   = $_POST['permanentAddress'];
$District   = $_POST['District'];
$Mobile   = $_POST['Mobile'];
$Email = $_POST['Email'];
$preferredTrack   = $_POST['preferredTrack'];
$sscRoll  = $_POST['sscRoll'];
$sscBoard = $_POST['sscBoard'];
$hscRoll  = $_POST['hscRoll'];
$hscBoard   = $_POST['hscBoard'];
$preferred_exam_center   = $_POST['preferred_exam_center'];
$last_level_of_education   = $_POST['last_level_of_education'];
$examTitle   = $_POST['examTitle'];
$group_sub  = $_POST['group_sub'];
$Institution   = $_POST['Institution'];
$Result   = $_POST['Result'];
$passingYear   = $_POST['passingYear'];
$experienceCategory   = $_POST['experienceCategory'];
$skillDescription  = $_POST['skillDescription'];
$extracurricularActivities  = $_POST['extracurricularActivities'];
$referenceName  = $_POST['referenceName'];
$Organization   = $_POST['Organization'];
$Address   = $_POST['Address'];
$mobileNo  = $_POST['mobileNo'];
$emailId   = $_POST['emailId'];
$Relation  = $_POST['Relation'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "std_form");



$query = "INSERT INTO `std_form`.`Form` (

`name` ,
`father_Name` ,
`mother_Name` ,
`Religion` ,
`Date_of_Birth` ,
`Gender` ,
`Nationality` ,
`National_ID` ,
`Present_Address` ,
`Permanent_Address` ,
`District` ,
`Mobile` ,
`Email` ,
`Preferred_Track` ,
`S.S.C_Roll` ,
`S.S.C_Board` ,
`H.S.C_Roll` ,
`H.S.C_Board` ,
`Preferred_Exam_Center` ,

`last_level_of_education` ,
`Exam_title` ,
`Group_sub` ,
`Institution` ,
`Result` ,
`Passing_year` ,
`Experience_category` ,
`skill_Description` ,
`Extracurricular_activities` ,
`Reference_Name` ,
`Organization` ,
`Address` ,
`mobile_No` ,
`Email_id` ,
`Relation`
)
VALUES (
 '$name', '$fatherName', '$motherName', '$Religion', '$Date_of_Birth', '$Gender', '$Nationality', '$nationalID', '$presentAddress', '$permanentAddress', '$District', '$Mobile', '$Email', '$preferredTrack', '$sscRoll', '$sscBoard', '$hscRoll', '$hscBoard', '$preferred_exam_center',  '$last_level_of_education', '$examTitle', '$group_sub', '$Institution', '$Result', '$passingYear', '$experienceCategory', '$skillDescription', '$extracurricularActivities', '$referenceName', '$Organization', '$Address', '$mobileNo', '$emailId', '$Relation'
);";
mysqli_query($link, $query);
echo $query;

header('location:list.php');
?>
