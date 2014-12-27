<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query = "select * from `personal_info` WHERE `ID` = $ID";

$result = mysqli_query($link, $query);


$row = mysqli_fetch_assoc($result);

?>


<form action="update.php" method="post">
    <h1 style="color: cadetblue" align="center" >Personal Information</h1>

    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>"
    <br><br>
    <label style="color: olive">Name:</label>
    <input type="text" name="name" value="<?php echo $row['name'];?>" /><br>
    <br>

    <label style="color: olive" >Father's Name:</label>
    <input type="text" name="fatherName" value="<?php echo $row['father_Name'];?>" /><br>
    <br>
    <label style="color: olive">Mother's Name:</label>
    <input type="text" name="motherName"  value="<?php echo $row['mother_Name'];?>"/><br>
    <br>
    <label style="color: olive">Religion:</label>
    <input type="text" name="Religion" value="<?php echo $row['Religion'];?>" /><br>
    <br>
    <label style="color: olive">Date of Birth:</label>
    <input type="text" name="Date_of_Birth" value="<?php echo $row['Date_of_Birth'];?>" /><br>

    <br>

    <label style="color: olive">Gender:</label>
    <input type="text" name="Gender" value="<?php echo $row['Gender'];?>" /><br>



    <label style="color: olive">Nationality:</label>
    <input type="text" name="Nationality" value="<?php echo $row['Nationality'];?>"/><br>
    <br>

    <label style="color: olive">National ID:</label>
    <input type="text" name="nationalID" value="<?php echo $row['National_ID'];?>" /><br>
    <br><br>
    <button type="submit">Update</button>
</form>