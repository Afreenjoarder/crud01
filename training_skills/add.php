 <?php

 $trainingTitle =  $_POST['trainingTitle'];
 $trainingDescription =  $_POST['trainingDescription'];

 $institute = $_POST['institute'];
 $address = $_POST['address'];

 $trainingYear = $_POST['trainingYear'];

 $Duration = $_POST['Duration'];

 $experienceCategory   = $_POST['experienceCategory'];

$skillDescription  = $_POST['skillDescription'];

$extracurricularActivities  = $_POST['extracurricularActivities'];

 $link = mysqli_connect("localhost",
     "root",
     "mysql123",
     "ftfl_training");

 $query = "INSERT INTO `ftfl_training`.`training_skills` ( `titletraining`, `training_Description`, `institute_name`, `address`,
          `training_Year`, `Duration`, `Experience_category`, `skill_Description`, `Extracurricular_activities`)
          VALUES ( '$trainingTitle', '$trainingDescription', '$institute', '$address', '$trainingYear', '$Duration', '$experienceCategory', '$skillDescription', '$extracurricularActivities');";

 mysqli_query($link, $query);
 echo $query;

 header('location:list.php');
 ?>