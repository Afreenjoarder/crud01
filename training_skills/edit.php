<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "select * from training_skills WHERE ID = $ID";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<form action="update.php" method="post">

    <h1>Training History</h1>

    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>"
    <br><br>

    <label>Training Title :</label>
    <input type="text" name="trainingTitle" value="<?php echo $row["titletraining"];?>" /><br><br>
    <br>
    <label>Training Description</label>
    <input type="text" row="6" cols ="30" name="trainingDescription" value="<?php echo $row["training_Description"];?>"/><br>
    <br><br>

    <label>Institute </label>
    <input type="text"  name="institute" value="<?php echo $row["institute_name"];?>"/>
    <br><br>
    <label>Address</label>
    <input type="text" row="6" cols ="30" name="address" value="<?php echo $row["address"];?>"/>
    <br><br>
    <label>Training Year</label>
    <input type="text"  name="trainingYear" value="<?php echo $row["training_Year"];?>"/>
    <br><br>

    <label>Duration</label>
    <input type="text"  name="Duration" value="<?php echo $row["Duration"];?>"/>
    <br><br>

    <h2> Specialization</h2>

    <label>Experience Category:</label>

    <select name ="Experience_category">


        <option <?php if ($row['Experience_category']== "Computer Enginering") echo "selected"; ?> value ="Computer Enginering"> Computer Enginering</option>
        <option <?php if ($row['Experience_category']== "IT/Communication") echo "selected"; ?> value ="IT/Communication"> IT/Communication</option>
        <option <?php if ($row['Experience_category']== "Engineer/Architect") echo "selected"; ?> value ="Engineer/Architect"> Engineer/Architect</option>
        <option <?php if ($row['Experience_category']== "Education/Training") echo "selected"; ?> value ="Education/Training"> Education/Training</option>
        <option <?php if ($row['Experience_category']== "Design/Creative") echo "selected"; ?> value = "Design/Creative"> Design/Creative</option>

    </select>



    <br><br>

    <label>Skill Description</label>

    <input type="text" row="20" cols ="40" name="skillDescription" value="<?php echo $row["skill_Description"];?>"/>
    <br><br>

    <label> Extracurricular Activities</label>
    <input type="text" row="6" cols ="30" name="extracurricularActivities" value="<?php echo $row["Extracurricular_activities"];?>"/>
    <br><br>

    <button type="submit">Update</button>

</form>
