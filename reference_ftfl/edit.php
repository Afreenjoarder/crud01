<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "select * from `reference` WHERE `ID` = $ID";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<form action="update.php" method="post">

    <h2> Add Reference</h2>

    <label>Reference Name:</label>
    <input type="text" name="referenceName" value="<?php echo $row["referenceName"];?>" /><br>
    <br>

    <label> Organization:</label>
    <input type="text" name="Organization" value="<?php echo $row["Organization"];?>" /><br>
    <br>
    <label>Address:</label>
    <input type="text" name="Address"  value="<?php echo $row["Address"];?>"/><br>
    <br>

    <label>Mobile No:</label>
    <input type="text" name="mobileNo"  value="<?php echo $row["mobileNo"];?>"/><br>
    <br>

    <br>


    <label> Relation:</label>
    <input type="text" name="Relation" value="<?php echo $row["Relation"];?>" /><br>
    <br>


    <button type="submit">Update</button>

</form>

