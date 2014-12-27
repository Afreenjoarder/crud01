<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query = "select * from `Academic` WHERE `ID` = $ID";

$result = mysqli_query($link, $query);


$row = mysqli_fetch_assoc($result);

?>
<form action="update_ac.php" method="post">

    <h1>Academic Information</h1>
    <br>
    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>"
    <br><br>

    <label>Level of Education :</label>
    <input type="text" name="level_of_education" value="<?php echo $row['Level_of_education'];?>" /><br>





    <br><br>

    <label> Exam Title:</label>
    <input type="text" name="examTitle" value="<?php echo $row['Exam_title'];?>" /><br>
    <br><br>

    <label>Group/Subject:</label>
    <input type="text" name="group_sub"" value="<?php echo $row['Group_sub'];?>" /><br>


    <br><br>

    <label>Institution:</label>
    <input type="text" name="Institution" value="<?php echo $row['Institution'];?>" /><br> <br>
    <br>

    <label>Result type:</label>
    <input type="text" name="Resulttype" value="<?php echo $row['Resulttype'];?>" /><br>
    <br><br>
    <label>Result:</label>
    <input type="text" name="Result" value="<?php echo $row['Result'];?>" /><br>

    <label>Scale:</label>
    <input type="text" name="Scale" value="<?php echo $row['Scale'];?>" /><br>

    <br><br>

    <label> Passing Year:</label>
    <input type="text" name="passingYear" value="<?php echo $row['Passing_year'];?>" /><br> <br>
    <br>
    <label>Duration:</label>
    <input type="text" name="Duration" value="<?php echo $row['Duration'];?>" /><br>
    <br>
    <br>
    <label>Achievement:</label>
    <input type="text" name="Achievement" value="<?php echo $row['Achievement'];?>" /><br> <br>
    <br>
    <button type="submit">Update</button>


</form>


