<?php

$ID = $_POST['ID'];
$trainingTitle =  $_POST['trainingTitle'];
$trainingDescription =  $_POST['trainingDescription'];

$institute = $_POST['institute'];
$address = $_POST['address'];

$trainingYear = $_POST['trainingYear'];

$Duration = $_POST['Duration'];

$experienceCategory  = $_POST['experienceCategory'];

$skillDescription  = $_POST['skillDescription'];

$extracurricularActivities  = $_POST['extracurricularActivities'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "UPDATE `ftfl_training`.`training_skills` SET `titletraining` = '".$trainingTitle."',
         `training_Description` = '".$trainingDescription."',
            `institute_name` = '".$institute."',
              `address` = '".$address."',
          `training_Year` = '".$trainingYear."',
           `Duration` ='".$Duration."',
           `Experience_category` = '".$experienceCategory."',
          `skill_Description` =  '".$skillDescription."',
      `Extracurricular_activities` = '".$extracurricularActivities."'
       WHERE `training_skills`.`ID` =$ID;";

mysqli_query($link, $query);
echo $query;
header('location:list.php');

?>


