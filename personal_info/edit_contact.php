<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query = "select * from contact_info WHERE ID = $ID";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
?>

<form action="update_contact.php" method="post">
    <h1 style="color: cadetblue" align="center" >Contact Information</h1>

    <input type="text" name="ID" value="<?php echo $row['ID'];?>"
    <br><br>

    <label style="color: olive">Present Address:</label>
    <input type="text" name="presentAddress" value="<?php echo $row['Present_Address'];?>" /><br>
    <br>

    <label style="color: olive" >Permanent Address:</label>
    <input type="text" name="permanentAddress" value="<?php echo $row['Permanent_Address'];?>" /><br>
    <br>
    <label style="color: olive">District:</label>
    <input type="text" name="District"  value="<?php echo $row['District'];?>"/><br>
    <br>
    <label style="color: olive">Mobile:</label>
    <input type="text" name="Mobile" value="<?php echo $row['Mobile'];?>" /><br>
    <br>
    <label style="color: olive">Email:</label>
    <input type="text" name="Email" value="<?php echo $row['Email'];?>" /><br>

    <br>




    <button type="submit">Update</button>
</form>
